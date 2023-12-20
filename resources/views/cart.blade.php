<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="/css/index.css" rel="stylesheet"> 
</head>
<body>
    <div class="cartContainer">
        <div class="cartTitle">
            <h1>Cart</h2>
            <hr>
            <div class="checkAllButton">
                <a href="#">
                    <img src="/imgs/uncheckedBox.svg" alt="selectAll">
                    <p>Pilih semua</p>
                </a>
            </div>
            <hr>
        </div>
    </div>
    <div class="cartContent">
        <div class="cartContentLabel">
            <div class="checkBtn">
                <button>
                    <img src="/imgs/uncheckedBox.svg" alt="checked">
                </button>
            </div>
            <div class="cartCard">
                <div class="cartProduct">
                    <div class="cartImg">
                        <img src="/imgs/mouse-2-100.svg" alt="">
                    </div>
                    <div class="cartProductInfo">
                        <p>> Mouse Name</p>
                        <p>Jakarta</p>
                        <h3>Rp. 100.000</h3>
                    </div>
                    <div class="cartExtra">
                        <div>
                            <form action="/increment" method="post">
                                @csrf
                                <button type="submit">+</button>
                            </form>
                            <form action="/decrement" method="post">
                                @csrf
                                <button type="submit">-</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardCheckout">
            <h1>Checkout</h1>
            <div class="checkoutUser">
                <p>Pelanggan: </p>
                <p>Tanggal: </p>
            </div>
            <div class="checkoutDesc">
                <div class="checkoutDescTop">
                    <p>No.</p>
                    <p>Kode Barang</p>
                    <p>Qty</p>
                    <p>Harga</p>
                    <p>Total</p>
                </div>
                <div class="checkoutLine">
                    <hr>
                </div>
                <div class="checkoutProduct">
                        <p>asdasdasdas</p>
                </div>
                <div class="checkoutLine">
                    <hr>
                </div>
                <div class="checkoutDescBot">
                    <p>Total:</p>
                    <p>{price}</p>
                </div>
                <div class="checkoutBtn">
                    <button>Lanjut</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>