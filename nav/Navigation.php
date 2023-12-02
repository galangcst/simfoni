<?php
class Navigation {
    public function render() {
        echo '
        <style>
            body {
                background-color: #f0f0f0;
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 10;
            }

            .header {
                background-color: #3498db;
                color: #fff;
                text-align: center;
                padding: 10px;
                position: relative;
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 20px;
            }

            .logo-container {
                display: flex;
                align-items: center;
                
            }

            .logo {
                width: 80px;
                height: 80px;
                border-radius: 50%;
            }

            .university-info {
                margin-left: 20px;
                text-align: right;
            }

            .university-name {
                margin: 0;
                font-size: 18px;
                font-weight: bold;
            }

            .navigation {
                display: flex;
                align-items: center;
            }

            .navigation a {
                margin: 0 20px;
                text-decoration: none;
                color: #fff;
                font-weight: bold;
            }

            .search-box {
                margin-left: auto;
                padding: 10px;
                display: flex;
                align-items: center;
            }

            input[type="text"] {
                width: 300px;
                padding: 8px;
                box-sizing: border-box;
            }

            input[type="submit"] {
                background-color: #3498db;
                color: #fff;
                border: none;
                padding: 8px 15px;
                border-radius: 5px;
                cursor: pointer;
            }
        </style>

        <div class="header">
            <div class="logo-container">
                <img class="logo" src="umg logo.png" alt="University Logo">
                <div class="university-info">
                    <p class="university-name">
                        Universitas Muhammadiyah Gresik
                    </p>
                </div>
            </div>

            <div class="navigation">
                <a href="#">Beranda</a>
                <a href="#">Lowongan Pekerjaan</a>
                <a href="#">Tentang Kami</a>
                <div class="search-box">
                    <form action="#" method="get">
                        <input type="text" name="search" placeholder="Search">
                        <input type="submit" value="Cari">
                    </form>
                </div>
            </div>
        </div>
        ';
    }
}
?>
