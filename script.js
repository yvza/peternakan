const x = {
    data() {
        return {
            // ayam petelur = ar
            arId: null,
            arNama: null,
            arBibit: null,
            arJual: null,
            // ayam pedaging = ag
            agId: null,
            agNama: null,
            agBibit: null,
            agJual: null,
            // bebek petelur = bp
            bpId: null,
            bpNama: null,
            bpBibit: null,
            bpJual: null
        }
    },
    created() {
        $.ajax({
            type: 'GET',
            url: './api.php?get=all',
            success: function(res){
                let json = JSON.parse(res)
                app.arId = json[0].id
                app.arNama = json[0].jenis
                app.arBibit = json[0].harga_bibit
                app.arJual = json[0].harga_jual
                app.agId = json[1].id
                app.agNama = json[1].jenis
                app.agBibit = json[1].harga_bibit
                app.agJual = json[1].harga_jual
                app.bpId = json[2].id
                app.bpNama = json[2].jenis
                app.bpBibit = json[2].harga_bibit
                app.bpJual = json[2].harga_jual
            }
        })
    },
    methods: {
        arBibitChanged(event) {
            $.ajax({
                type: 'POST',
                url: './api.php?action=update',
                data: 'arBibit='+event+
                '&arId='+app.arId,
                success: function(res){
                    console.log(res)
                }
            })
        },
        arJualChanged(event) {
            console.log(event)
        }
    }
}

const app = new Vue(x)
app.$mount('#app')