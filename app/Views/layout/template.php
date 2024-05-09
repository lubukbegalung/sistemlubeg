
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SISTEM MANAJEMEN SURAT KELURAHAN LUBUK BEGALUNG</title>
    <style>
          body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9; /* Warna krem lembut */
            display: flex;
            min-height: 100vh;
        }

        .logo img {
            max-width: 50px;
            height: auto;
        }
        aside {
            width: 170px; /* Lebar navbar kanan */
            background-color: #3498db; /* Warna hijau */
            color: #fff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100%;
        }

        aside header {
            background-color: #3498db; /* Warna hijau lebih tua */
            padding: 15px;
            text-align: center;
            font-size: 1.3em;
            border-bottom: 1px solid #218838;
        }

        nav {
            flex: 1;
            overflow-y: auto;
            padding-top: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            padding: 12px 20px;
            margin-bottom: 10px;
            border-radius: 15px;
            transition: background-color 0.3s;
            display: block;
            background-color: #218838; /* Warna hijau lebih tua */
        }

        nav a:hover {
            background-color: #28a745; /* Warna hijau saat dihover */
        }

        nav button {
            display: block;
            width: 100%;
            padding: 12px 20px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            background-color: #218838; /* Warna hijau lebih tua */
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        nav button:hover {
            background-color: #28a745; /* Warna hijau saat dihover */
        }

        main {
            flex: 1;
            padding: 20px;
            margin-left: 160px; /* Tambahkan margin untuk menghindari konten menempel langsung di bawah navbar */
        }

        header {
            background-color: #fff;
            color: #333;
            text-align: center;
            padding:  1px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            
        }

        .baru {
        
           padding: 10px;
         margin-right: 85%;
         align-content: center;
         
         
        }
        footer {
          
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        form button {
            margin-left: 90%;
            font-size: larger;
            display: block;
            width: 10%;
            padding: 10px 15px;
            margin-bottom: 10px;
            border: none;
            border-radius: 10px;
            background-color: #218838; /* Warna hijau lebih tua */
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form.login-button {
            background-color: #007bff; /* Warna biru muda */
        }
        h3 {
            text-align: center;
        }
        .has-submenu:hover .submenu {
    display: block;
}

.submenu {
    display: none;
    position: absolute;
    background-color: #fff; /* Dropdown background color */
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); /* Dropdown shadow */
    z-index: 1;
}

.submenu li {
    float: none;
}

.submenu li a {
    padding: 10px 15px;
    display: block;
    color: #333; /* Dropdown item color */
    text-decoration: none;
}

.submenu li a:hover {
    background-color: #3498db; /* Dropdown item hover background color */
}

/* Navigation Styles */
.navigation {
    background-color: #f8f9fa; /* Background color of the navigation */
    padding: 10px; /* Padding around the navigation */
    border-radius: 5px; /* Rounded corners for the navigation */
}

.navigation ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
}

.navigation ul li {
    display: block;
    margin-bottom: 5px; /* Spacing between navigation items */
}

.navigation ul li:last-child {
    margin-bottom: 0; /* Remove margin from the last navigation item */
}

.navigation ul li a {
    text-decoration: none;
    color: #333; /* Link color */
    padding: 10px; /* Padding around the link */
    border-radius: 5px; /* Rounded corners for the links */
    transition: background-color 0.3s ease; /* Smooth transition for background color */
    display: block; /* Display links as block elements */
}

.navigation ul li a:hover {
    background-color: #3498db; /* Background color on hover */
}

/* Submenu Styles */
.submenu {
    display: none;
    position: relative; /* Change position to relative */
    background-color: #fff; /* Background color of the submenu */
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow for the submenu */
}

.has-submenu:hover .submenu {
    display: block;
}

@media screen and (max-width: 768px) {

    aside {
            width: 70px; /* Lebar navbar kanan */
            background-color: #3498db; /* Warna hijau */
            color: #fff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100%;
        }

        aside header {
            background-color: #3498db; /* Warna hijau lebih tua */
            padding: 15px;
            text-align: center;
            font-size: 1.3em;
            border-bottom: 1px solid #218838;
        }
        main {
            flex: 1;
            padding: 20px;
            margin-left: 100px; /* Tambahkan margin untuk menghindari konten menempel langsung di bawah navbar */
        }
        header {
            background-color: #fff;
            color: #333;
            text-align: center;
            padding:  1px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            
        }
        h3 {
            text-align: center;
            margin-right: 150px;
            font-size: medium;
        }
        h1 {
            text-align: center;
            margin-right: 150px;
           font-size: medium;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9; /* Warna krem lembut */
            display: flex;
            min-height: 50vh;
        }
        .navigation {
    background-color: #f8f9fa; /* Background color of the navigation */
    padding: 5px; /* Padding around the navigation */
    border-radius: 5px; /* Rounded corners for the navigation */
}

.navigation ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
}

.navigation ul li {
    display: block;
    margin-bottom: 5px; /* Spacing between navigation items */
}

.navigation ul li:last-child {
    margin-bottom: 0; /* Remove margin from the last navigation item */
}

.navigation ul li a {
    text-decoration: none;
    color: #333; /* Link color */
    padding: 10px; /* Padding around the link */
    border-radius: 5px; /* Rounded corners for the links */
    transition: background-color 0.3s ease; /* Smooth transition for background color */
    display: block; /* Display links as block elements */
}

.navigation ul li a:hover {
    background-color: #3498db; /* Background color on hover */
}
.baru {
        width: 100px;
        padding: 10px;
   margin-left: 400px;
   
      
} 
}
    </style>
</head>
<body>

    <aside>
        <header>
            <div class="logo">
            <img src="<?= base_url('uploads/logo_padang.svg.png') ?>" alt="kelurahan lubuk begalung">
        </header>
       
      
        <nav class="navigation">
    <ul class="list-unstyled">
        <li class="active"><a href="<?=base_url('/laporan') ?>">Home</span></a></li>
        <li class="active"><a href="<?=base_url('/user') ?>">Kelola User</span></a></li>
        </ul>
</nav>
    </aside>
    <main>
        <header>
        <h1>SISTEM MANAJEMEN SURAT</h1>
        <h3> KELURAHAN LUBUK BEGALUNG</h3>
        </header>
        <section>
        <br>
        <form method="post" action="<?= base_url('/login') ?>">
        <button type="submit" class="baru">Logout</button></form>
        <?= $this->renderSection('content'); ?>
        <body>
    <style>
table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #3498db; /* Warna hijau */
            color: #fff;

        }
        @media screen and (max-width: 768px) {      
        table {
            width: 20%;
            border-collapse: collapse;
            margin-top: 5px;
            margin-left: -45px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 1px;
            text-align: center;
        }
        th {
            background-color: #3498db; /* Warna hijau */
            color: #fff;

        }
    }
        </style>
        </section>
    </main>
  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
 <script> document.addEventListener("DOMContentLoaded", function() {
    var submenuLinks = document.querySelectorAll('.has-submenu > a');
    submenuLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            var submenu = this.parentNode.querySelector('.submenu');
            if (submenu.style.display === 'block') {
                submenu.style.display = 'none';
            } else {
                submenu.style.display = 'block';
            }
        });
    });
});
</script>
</body>
</html>