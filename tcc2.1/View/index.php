<style>
    .menu{
        
        height: 200px;
        display: flex;
        justify-content: space-between;
        align-items: center; 
        margin-top: -20px;
        background: #D9D9D9;
        
    }
    .menu li{
        list-style:none;
    }
    .logo img{
        width: 150px;
        margin-left: 80px;
        /*background: #fff;*/
        border-radius: 15px;
    }
    .imgUser img{
        width: 50px;
        height: 50px;
        margin-right: 80px;
        
    }
    .search{
        display: flex;
    }
    .search input{
        height: 30px;
        border-radius: 10px;
    }
    .search img{
        width: 30px;
    }
    .nav ul{
        display: flex;
    }
    .nav ul li{
        padding: 15px;
    }
    
    
</style>
<div class="menu">
    <div class="logo"><img src="../img/logotcc.png" alt=""></div>
    <nav class="nav">
        <ul>
            <li><a href="">MEDICAMENTOS</a></li>
            <li><a href="">CLIENTES</a></li>
            <li><a href="">COLABORADORES</a></li>
        </ul>
    </nav>
    <div class="search">
        <input type="search">
            
                <a href="#">
                    <img src="../img/lupa.png" alt="">
                </a>
            
        </div>
    <div class="imgUser">
        <a href=""><img src="../img/user.png" alt=""></a>
    </div>
</div>