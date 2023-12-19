<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PlayShop</title>

        <link href="/css/index.css" rel="stylesheet">
        
    </head>
    <body>
        <div class='navBar'>
            <div class="nav-logo">
                <img src="/imgs/playShop_Logo.svg" alt="Logo"/>
            </div>
            <ul class='nav-menu'>
                <li>Home <hr/></li>
                <li>Products</li>
                <li>About Us</li>
                <li>Help</li>
            </ul>
            <div class="nav-login-cart">
                <button>Login</button>
                <div class="nav-cart-logo">
                    <a href="#">
                        <img src="/imgs/cart.svg" alt="Cart"/>
                    </a>
                </div>
            </div>
        </div>
        <div className='searchForm'>
            <h2>Temukan barang anda!</h2>
            <form action="#" class='formContainer'>
                <img class="searchIconForm" src="/imgs/searchIcon.svg" alt=""/>
                <input type="text" placeholder="Ketik kebutuhan elektronik anda" name="email"/>
                <button class="searchButton">
                    <a href="#">
                        <img class="searchIconEnter" src=/imgs/enterSearchIcon.svg alt=""/>
                    </a>
                </button>
            </form>
        </div>
        <div class="itemBar">
            <p>Popular Items</p>
          </div>
        <a href="#">
            <div className="product-card">
            <img src={image} alt={name}/>
                <div className="details-container">
                    <h3>{name}</h3>
                    <div className="price">Price: Rp. {price}</div>
                    <div className="company">Company: {company}</div>
                    <div className="location">Location: {location}</div>
                </div>
            </div>
        </a>
    </body>
</html>
