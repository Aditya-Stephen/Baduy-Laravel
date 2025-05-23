<body>
        <div class="back-button12-container">
          <a href="{{ route('artikel') }}" class="styled-wrapper back-button12">
            <button class="button12">
              <div class="button12-box">
                <span class="button12-elem">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="arrow-icon">
                    <path fill="black" d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
                  </svg>
                </span>
                <span class="button12-elem">
                  <svg fill="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="arrow-icon">
                    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
                  </svg>
                </span>
              </div>
            </button>
          </a>
        </div>

    <div class="container article-form">
        <h2>Buat Artikel Baru</h2>
        
        <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Input Judul -->
            <div class="form-group">
                <label for="title">Judul Artikel</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <!-- Input genre -->
            <div class="form-group">
                <label for="genre">Kategori Artikel</label>
                <select class="form-control" id="genre" name="genre" required>
                    <option value="">Pilih Kategori</option>
                    <option value="Budaya & Tradisi">Budaya & Tradisi</option>
                    <option value="Kearifan Lokal">Kearifan Lokal</option>
                    <option value="Mitos & Kepercayaan">Mitos & Kepercayaan</option>
                    <option value="Lokasi">Lokasi</option>
                </select>
            </div>

            <!-- Input Gambar Header -->
            <div class="form-group">
                <label for="header_image">URL Gambar Header</label>
                <input type="url" class="form-control" id="header_image" name="header_image" required>
            </div>

            <!-- Input Konten -->
            <div class="form-group">
                <label for="content">Isi Artikel</label>
                <textarea class="form-control12" id="content" name="content" rows="10" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Publikasikan</button>
        </form>
    </div>
</body>
<style>
    body {
    background-image: linear-gradient(to bottom, #305792, #313a4d);
    background-attachment: fixed;
    background-size: cover;
    min-height: 100vh;
    margin: 0;
    padding: 0;
    }

    /* Style untuk container form */
    .container.article-form {
        max-width: 800px;
        margin: 40px auto;
        padding: 20px;
        background-color: #f8f8c8;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Style untuk judul form */
    .container.article-form h2 {
        text-align: center;
        margin-bottom: 20px;
        font-weight: bold;
        font-size: 24px;
        color: #333;
    }

    /* Style untuk form-group */
    .form-group {
        margin-bottom: 20px;
    }

    /* Style untuk label */
    .form-group label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        font-size: 16px;
        color: #666;
    }

    /* Style untuk input dan textarea */
    .form-control {
        width: 100%;
        height: 40px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .form-control12 {
        width: 100%;
        height: 400px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    /* Style untuk textarea */
    .form-control textarea {
        height: 150px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .form-control select {
    height: 40px;
    padding: 5px 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    }

    .form-control select:focus {
        border-color: #4CAF50;
        outline: none;
        box-shadow: 0 0 5px rgba(76,175,80,0.3);
    }

    /* Style untuk tombol submit */
    .btn.btn-primary {
        width: 100%;
        height: 40px;
        padding: 10px;
        font-size: 16px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Style untuk tombol submit saat di hover */
    .btn.btn-primary:hover {
        background-color: #3e8e41;
    }

    /* Style untuk error message */
    .error-message {
        color: #f00;
        font-size: 14px;
        margin-bottom: 10px;
    }

    /* Style untuk placeholder */
    .form-control::placeholder {
        color: #ccc;
        font-size: 16px;
    }

    /* Style untuk focus */
    .form-control:focus {
        border-color: #4CAF50;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Style untuk back button */
    .back-button12back-button12-container {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: rgb(255, 255, 255);
  }
  
  .button-text {
    margin-left: 10px;
    font-weight: bold;
    opacity: 0;
    transition: opacity 0.3s ease;
  }
  
  .back-button12:hover .button-text {
    opacity: 1;
  }
  
  .styled-wrapper .button12 {
    display: block;
    position: relative;
    width: 76px;
    height: 76px;
    margin-left: 100px;
    top: 140px;
    overflow: hidden;
    outline: none;
    background-color: transparent;
    cursor: pointer;
    border: 0;
  }
  
  .styled-wrapper .button12:before {
    content: "";
    position: absolute;
    border-radius: 50%;
    inset: 7px;
    border: 4px solid rgb(255, 255, 255);
    transition:
      opacity 0.4s cubic-bezier(0.77, 0, 0.175, 1) 80ms,
      transform 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 80ms;
  }
  
  .styled-wrapper .button12:after {
    content: "";
    position: absolute;
    border-radius: 50%;
    inset: 7px;
    border: 4px solid #ffffff;
    transform: scale(1.3);
    transition:
      opacity 0.4s cubic-bezier(0.165, 0.84, 0.44, 1),
      transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    opacity: 0;
  }
  
  .styled-wrapper .button12:hover:before,
  .styled-wrapper .button12:focus:before {
    opacity: 0;
    transform: scale(0.7);
    transition:
      opacity 0.4s cubic-bezier(0.165, 0.84, 0.44, 1),
      transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  }
  
  .styled-wrapper .button12:hover:after,
  .styled-wrapper .button12:focus:after {
    opacity: 1;
    transform: scale(1);
    transition:
      opacity 0.4s cubic-bezier(0.77, 0, 0.175, 1) 80ms,
      transform 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 80ms;
  }
  
  .styled-wrapper .button12-box {
    display: flex;
    position: absolute;
    top: 0px;
    left: 0px;
  }
  
  .styled-wrapper .button12-elem {
    display: block;
    width: 30px;
    height: 30px;
    margin: 24px 18px 0 22px;
    transform: rotate(360deg);
    fill: #f0eeef;
  }
  
  .styled-wrapper .button12:hover .button12-box,
  .styled-wrapper .button12:focus .button12-box {
    transition: 0.4s;
    transform: translateX(-69px);
  }
</style>
