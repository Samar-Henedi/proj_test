<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="child_care.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet" />
    <title>Add a child</title>
</head>

<body>
    <form action="get">
        <div class="main-page">
            <div class="sidbar">
                <div class="inforamtion-sid">
                    <img src="images/female7.jpg" alt="">
                    <span class="span-sid">Samar Henedi</span>
                    <span class="span-sid">Employee</span>
                </div>
                <ul>
                    <li>
                        <a href="addchild.php" class="active">
                            <i class="fa-solid fa-user-plus"></i>
                            <span>Add a Child</span>
                        </a>
                    </li>
                    <li>
                        <a href="searchchild.php">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <span>Search a Child</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <div class="title">
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass ic-search"></i>
                        <input type="search" placeholder="Type A Keyword" name="search" />
                    </div>
                    <div class="prof">
                        <img src="images/logo-removebg-preview.png" alt="Profile-img" />
                        <i class="fas fa-bars "></i>
                    </div>
                </div>
                <div class="container">
                    <div class="form" style="margin-bottom: 15px;">
                        <span>Personal Information</span>
                        <div class="box">
                            <span>Name</span>
                            <input name="child-name" type="text" oninput="filterInputAr(event)" title="الرجاء ادخال اسم الطفل باللغة العربية فقط" required="">
                        </div>
                        <div class="box">
                            <span>Father Name</span>
                            <input name="father-name" type="text" oninput="filterInputAr(event)" title="الرجاء ادخال اسم الأب باللغة العربية فقط" required="">
                        </div>
                        <div class="box">
                            <span>Mother Name</span>
                            <input name="mother-name" type="text" oninput="filterInputAr(event)" title="الرجاء ادخال اسم الأم باللغة العربية فقط" required="">
                        </div>
                        <div class="box">
                            <span>Last Name</span>
                            <input name="last-name" type="text" oninput="filterInputAr(event)" title="الرجاء ادخال الكنية باللغة العربية فقط" required="">
                        </div>
                    </div>
                    <div class="form">
                        <div class="box">
                            <span>Age(month)</span>
                            <input id="month-age" name="month-age" type="text" oninput="filterInput(event)" title="الرجاء ادخال ارقام صحيحة فقط" required="">
                        </div>
                        <div class="box">
                            <span>weight(kg)</span>
                            <input name="weight" type="text" oninput="filterInput1(event)" title="الرجاء ادخال ارقام عشرية فقط" required="">
                        </div>
                        <div class="box">
                            <span>height(cm)</span>
                            <input name="length" type="text" oninput="filterInput1(event)" title="الرجاء ادخال ارقام عشرية فقط" required="">
                        </div>
                        <div class="box">
                            <span>MUAC (mm)</span>
                            <input name="muac" type="text" oninput="filterInput(event)" title="الرجاء ادخال ارقام صحيحة فقط" required="">
                        </div>
                        <div class="box">
                            <span>High-Energy Biscuit</span>
                            <input id="month-age" name="Biscuit" type="text" oninput="filterInput(event)" title="الرجاء ادخال ارقام صحيحة فقط" required="">
                        </div>
                    </div>
                    <input type="submit" value="Add" class="submit" />


                </div>
            </div>
        </div>

    </form>
    <script src="./js/filterInput.js"></script>

</body>

</html>
