<？php
    $ conn = mysqli_connect（ “ localhost”， “ root”， “”， “ mydb”）;<!--建立資料庫連線，如果$conn=false代表連結不成功-->
    
    $ result = mysqli_query（ $ conn， “從用戶選擇*”）;<!--查詢-->

    $ row = mysqli_fetch_array（ $ result）;複製代碼

    echo  $ row [id] + “” + $ row [pwd];
？>
