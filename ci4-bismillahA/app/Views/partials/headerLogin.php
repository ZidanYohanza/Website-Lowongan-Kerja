
<head>
    <style>
        a:link, a:visited{
            color: #ffffff;
            text-decoration: none;
        }

        .tombol{
            float: right;
        }
        
        .header {
            background-color: #6FA894;
            color: #fff;
            height: 63px;
            font-family: "Aurora Script";
            display: block;
        }
        
        .header-logo {
            float: left;
            font-size: 29px;
            padding: 8px 40px 13px 40px;
            font-family: "PoetsenOne";
        }

        .header-logo:link, .header-logo:visited {
            color: #BCFFE7;
        }
            
        .tombol a:link, .tombol a:visited {
            font-weight: bold;
            color: #ffff;
            padding-top: 1px;
            margin: 0px 20px 0px 20px;
            background-color: #7BC9AD;
            border-radius: 20px;
            color: #000000;
            font-size: 19px;
            height: 30px;
            width: 150px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        
        .tombol a:hover, .tombol a:active {
            background-color: #7AB9A3;
        }

        br {
        line-height: 110%;
        }

        .footer {
            background-color: #6FA894;
            color: #fff;
            height: 50px;
            padding: 30px 20px 55px 20px;
        }
            
        .footer-logo {
            float: left;
            font-size: 25px;
        }
            
        .footer-list {
            float: right;
        }
            
        .footer-list li {
            padding-bottom: 5px;
        }

        .footer-list > a:link, .footer-list > a:visited {
            font-weight: bold;
            color: #ffff;
            padding-top: 5px;
            margin: 15px 50px;
            background-color: #7BC9AD;
            border-radius: 20px;
            color: #000000;
            font-size: 19px;
            height: 30px;
            width: 150px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .navLis a{
            margin: 0px 30px;
            font-size: 18px;
        }
        
        .footer-list > a:hover, .footer-list > a:active {
            background-color: #7AB9A3;
        }

        a:hover, .container a:active{
            background-color: #7AB9A3;
        }
    </style>
</head>

<div class="header">
    <a href="/" class="header-logo" style="color: #BCFFE7;"><strong> Cari Kerja Kuy </strong></a>
    <div class="header-list">
        <span class = "navLis">
            <strong>
                <br>
                <a href="/" class="lis">Beranda</a>
                <a href="" class="lis">Perusahaan</a>
                <a href="" class="lis">About Me</a>
            </strong>
        </span>
        <span class ="tombol">
            <a href="/login" class="btn" style="color: #ffff;">Login</a>
            <a href="/register" class="btn" style="color: #ffff;">Sign-Up</a>
        </span>
    </div>
</div>