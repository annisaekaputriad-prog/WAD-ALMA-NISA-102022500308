<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Book - Resto & Cafe</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Geneva, monospace;
        }

        body {
            background-color: #f7f3ee;
            color: #333;
        }

        header {
            background-color: #5c4033;
            color: white;
            padding: 20px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 24px;
        }

        .nav-buttons button {
            background-color: #c89b6d;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            transition: background 0.3s;
        }

        .nav-buttons button:hover {
            background-color: #b08457;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .page-section {
            display: none;
        }

        .page-section.active {
            display: block;
        }

        .title {
            margin-bottom: 30px;
        }

        .title h2 {
            color: #5c4033;
            font-size: 32px;
        }

        .title p {
            color: #777;
            margin-top: 8px;
        }

        .menu-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .image {
            height: 180px;
            background-color: #d8c3ad;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 55px;
        }

        .content {
            padding: 20px;
        }

        .category {
            background-color: #eee0d0;
            color: #795548;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }

        .content h3 {
            color: #5c4033;
            margin: 15px 0 8px;
        }

        .content p {
            color: #777;
            font-size: 14px;
            line-height: 1.5;
        }

        .info-detail {
            font-size: 13px;
            color: #555;
            margin-top: 10px;
        }

        .price {
            color: #a05a2c;
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
        }

        .status {
            color: green;
            font-size: 13px;
            margin-top: 8px;
        }

        .form-container {
            max-width: 600px;
            background: #ffffff;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            margin: auto;
        }

        .form-container h2 {
            color: #5c4033;
            font-size: 28px;
            margin-bottom: 25px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #5c4033;
            margin-bottom: 8px;
            font-size: 14px;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #d8c3ad;
            border-radius: 8px;
            background-color: #f7f3ee;
            color: #333;
            font-size: 14px;
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #c89b6d;
        }

        textarea {
            resize: vertical;
            height: 90px;
        }

        .checkbox-group {
            display: flex;
            gap: 25px;
            margin-top: 8px;
        }

        .checkbox-group label {
            font-weight: normal;
            display: flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
        }

        .btn-submit {
            background-color: #5c4033;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
            transition: background 0.3s;
        }

        .btn-submit:hover {
            background-color: #483228;
        }

        @media (max-width: 800px) {
            .menu-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 550px) {
            .menu-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>☕ Resto & Cafe</h1>
    <div class="nav-buttons">
        <button onclick="switchPage('home')">Daftar Menu</button>
        <button onclick="switchPage('input')">+ Add Menu</button>
    </div>
</header>

<div class="container">

    <div id="home-page" class="page-section active">
        <div class="title">
            <h2>Menu Book</h2>
            <p>Daftar makanan dan minuman Resto & Cafe</p>
        </div>

        <div class="menu-container">
            <!-- Menu 1 -->
            <div class="card">
                <div class="image">🍛</div>
                <div class="content">
                    <span class="category">Food</span>
                    <h3>Nasi Goreng Special</h3>
                    <p>Nasi goreng dengan telur, ayam, sayuran dan bumbu special.</p>
                    <div class="info-detail"> Halal | ⚠️ Alergen: Kacang</div>
                    <div class="price">Rp 25.000</div>
                    <div class="status">● Available</div>
                </div>
            </div>

            <!-- Menu 2 -->
            <div class="card">
                <div class="image">🍝</div>
                <div class="content">
                    <span class="category">Food</span>
                    <h3>Spaghetti Carbonara</h3>
                    <p>Pasta creamy dengan saus carbonara dan taburan keju mozarella.</p>
                    <div class="info-detail"> Halal | ⚠️ Alergen: Susu/Keju</div>
                    <div class="price">Rp 32.000</div>
                    <div class="status">● Available</div>
                </div>
            </div>

            <!-- Menu 3 -->
            <div class="card">
                <div class="image">☕</div>
                <div class="content">
                    <span class="category">Drink</span>
                    <h3>Cafe Latte</h3>
                    <p>Espresso dengan steamed milk dan creamy milk foam.</p>
                    <div class="info-detail"> Halal | Non-Alergen</div>
                    <div class="price">Rp 22.000</div>
                    <div class="status">● Available</div>
                </div>
            </div>
        </div>
    </div>

    <div id="input-page" class="page-section">
        <div class="form-container">
            <h2>Tambah Menu Baru</h2>

            <form action="proses.php" method="POST">
                
                <div class="form-group">
                    <label for="item_name">Nama Menu:</label>
                    <input type="text" id="item_name" name="item_name" required placeholder="Contoh: Nasi Goreng Spesial">
                </div>

                <div class="form-group">
                    <label for="category">Kategori:</label>
                    <select id="category" name="category" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Food">Makanan (Food)</option>
                        <option value="Drink">Minuman (Drink)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi:</label>
                    <textarea id="description" name="description" placeholder="Deskripsi bahan dan rasa..."></textarea>
                </div>

                <div class="form-group">
                    <label for="price">Harga (Rp):</label>
                    <input type="number" id="price" name="price" required placeholder="Contoh: 25000">
                </div>

                <div class="form-group">
                    <label>Indikator Halal & Alergen:</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="is_halal" value="1"> Halal</label>
                        <label><input type="checkbox" name="contains_allergen" value="1"> Mengandung Alergen</label>
                    </div>
                </div>

                <button type="submit" name="simpan" class="btn-submit">Simpan Menu</button>
            </form>
        </div>
    </div>

</div>

<script>
    function switchPage(pageId) {
        document.querySelectorAll('.page-section').forEach(section => {
            section.classList.remove('active');
        });
        if (pageId === 'home') {
            document.getElementById('home-page').classList.add('active');
        } else if (pageId === 'input') {
            document.getElementById('input-page').classList.add('active');
        }
    }
</script>

</body>
</html>