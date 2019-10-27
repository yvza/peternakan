<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pereternakan Unggas</title>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/2.5.94/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/buefy/dist/buefy.min.css">
    <style>
      [v-cloak] {
        display: none;
      }
      .jarak-ndokor {
        margin-top: 50px;
      }
      .column > h1 {
        padding: 20px;
      }
    </style>
</head>
<body>
    <div id="app" v-cloak>
    <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="./index.php">
          <h5 class="has-text-weight-bold">PETERNAKAN</h5>
        </a>
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
        <a class="navbar-item" href="./index.php">
            Home
        </a>
    </div>
    </nav>
      <div class="container">
          <div class="columns jarak-ndokor">
              <div class="column">
                <h1 class="has-text-centered">{{arNama}}</h1>
                <b-field>
                  <b-numberinput @input="arBibitChanged($event)" v-model="arBibit"></b-numberinput>
                </b-field>
                <b-field>
                  <b-numberinput @input="arJualChanged($event)"  v-model="arJual"></b-numberinput>
                </b-field>
              </div>
              <div class="column">
                <h1 class="has-text-centered">{{agNama}}</h1>
                <b-field>
                  <b-numberinput v-model="agBibit"></b-numberinput>
                </b-field>
                <b-field>
                  <b-numberinput v-model="agJual"></b-numberinput>
                </b-field>
              </div>
              <div class="column">
                <h1 class="has-text-centered">{{bpNama}}</h1>
                <b-field>
                  <b-numberinput v-model="bpJual"></b-numberinput>
                </b-field>
                <b-field>
                  <b-numberinput v-model="bpJual"></b-numberinput>
                </b-field>
              </div>
          </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/buefy/dist/buefy.min.js"></script>
    <script src="./script.js"></script>
</body>
</html>