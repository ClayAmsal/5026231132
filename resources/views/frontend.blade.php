<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5026231132</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
    }

    body {
      background-color: #1d1b1b;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: repeat(2, 1fr);
      gap: 20px;
      width: 90vw;
      height: 90vh;
    }

    .card-container {
      display: flex;
      margin-top: 3rem;
      flex-direction: column;
      align-items: center;
      text-align: center;
      text-decoration: none;
      color: #ffffff;
    }

    .card {
      position: relative;
      border-radius: 20px;
      overflow: hidden;
      background-size: cover;
      background-position: center;
      width: 100%;
      aspect-ratio: 16 / 9;
      cursor: pointer;
      transition: transform 0.3s ease, filter 0.3s ease;
    }

    .card::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.8);
      opacity: 0;
      transition: opacity 0.3s ease;
      z-index: 1;
    }

    .card:hover::before {
      opacity: 1;
    }

    .card:hover .overlay {
      opacity: 1;
    }

    .overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #000;
      font-size: 1.3rem;
      font-weight: 600;
      z-index: 2;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .card-title {
      margin-top: 15px;
      font-size: 1.5rem;
      font-weight: 600;
    }
  </style>
</head>
<body>
  <div class="grid-container">
    <a href="pertama" class="card-container">
      <div class="card" style="background-image: url('images/pertamabg.png');">
        <div class="overlay">Pertama</div>
      </div>
      <div class="card-title">Pertama</div>
    </a>
    <a href="soallatihan5" class="card-container">
      <div class="card" style="background-image: url('images/soallatihan5bg.png');">
        <div class="overlay">Soal Latihan 5</div>
      </div>
      <div class="card-title">Soal Latihan 5</div>
    </a>
    <a href="linktree" class="card-container">
      <div class="card" style="background-image: url('images/linktreebg.png');">
        <div class="overlay">Linktree</div>
      </div>
      <div class="card-title">Linktree</div>
    </a>
    <a href="validasi1" class="card-container">
      <div class="card" style="background-image: url('images/validasi1bg.png');">
        <div class="overlay">Validasi1</div>
      </div>
      <div class="card-title">Validasi1</div>
    </a>
    <a href="js1" class="card-container">
      <div class="card" style="background-image: url('images/js1bg.png');">
        <div class="overlay">Js1</div>
      </div>
      <div class="card-title">Js1</div>
    </a>
    <a href="bootstrap1" class="card-container">
      <div class="card" style="background-image: url('images/bootstrapbg.png');">
        <div class="overlay">Bootstrap</div>
      </div>
      <div class="card-title">Bootstrap</div>
    </a>
    <a href="gridcontainer" class="card-container">
      <div class="card" style="background-image: url('images/gridbg.png');">
        <div class="overlay">Grid Container</div>
      </div>
      <div class="card-title">Grid Container</div>
    </a>
    <a href="pseudo-element" class="card-container">
      <div class="card" style="background-image: url('images/pseudo-elementbg.png');">
        <div class="overlay">Pseudo-element</div>
      </div>
      <div class="card-title">Pseudo-element</div>
    </a>
  </div>
</body>
</html>
