<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="{{url('/assets/css/admin_style.css')}}">
    <script src="vue.js"></script>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <img style="float:left" src="logo.png" width="48px" height="48px">
        <a style="background-color:inherit; color:inherit;" href="#home">Puskesmas</a>
        <a style="background-color:red; color:inherit; float:right;" class="blogout" href="">
            <img class="imglogout" src="logout.png">
            <div class="logout">LOGOUT</div>
        </a>

        <a href="javascript:void(0);" class="icon" onclick="topNav()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><i class="fas fa-home"></i> Home
            <hr></a>
        <a href="#"><i class="fas fa-address-card"></i> Data Pasien
            <hr></a>
        <a href="#"><i class="fas fa-user-friends"></i> Antrian
            <hr></a>
        <a href="#"><i class="fas fa-file-alt"></i> Manajement
            <hr></a>
    </div>

    <div class="main" id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <div class="header">
            <div class="row">
                <div class="col-12 col-s-12" style="overflow-x:auto;">
                    <h1>Form Edit Poli</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-s-12 data_tabel" style="overflow-x:auto;">
                <div class="row">
                    <div class="col-8 col-s-6" style="min-width: 500px;">
                        <div class="form_in">
                            <form action="/action_page.php">
                                <div class="row">
                                    <div class="col-25">
                                        <label for="fname">Nama Poli</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="fname" name="nama" placeholder="Nama Poli..">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="subject">Deskripsi</label>
                                    </div>
                                    <div class="col-75">
                                        <textarea id="subject" name="subject" placeholder="Deskripsi.."
                                            style="height:200px"></textarea>
                                    </div>
                                    <input type="submit" value="Submit">

                                </div>

                        </div>
                    </div>
                    <div class="col-4 col-s-6" style="min-width: 200px;">
                        <div id="app" style="padding: 15px; margin-top: 6px; text-align: center;">
                            <div id="preview">
                                <img v-if="url" :src="url" style="width: 100%; max-width: 200px;" />
                            </div>
                            <div class="wrapperfile">
                                <div class="file-upload" @change="onFileChange">
                                    <input type="file" />
                                    <i class="fa fa-arrow-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>&copy;copyright</p>
        </div>

    </div>
</body>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("myTopnav").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.getElementById("myTopnav").style.marginLeft = "0";
    }

    function topNav() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
            document.getElementById("main").style.marginTop = "0";
        } else {
            x.className = "topnav";
        }
    }

    const vm = new Vue({
        el: '#app',
        data() {
            return {
                url: "gallery.png",
            }
        },
        methods: {
            onFileChange(e) {
                const file = e.target.files[0];
                this.url = URL.createObjectURL(file);
            }
        }
    })
</script>

</html>