<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
  <style>
    /* =========== Google Fonts ============ */
    @import url("https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap");

    /* ======================= Cards ====================== */
    .cardBox {
        position: relative;
        width: 100%;
        padding: 20px;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 30px;
    }

    .cardBox .card {
        position: relative;
        background: var(--white);
        padding: 30px;
        border-radius: 20px;
        display: flex;
        justify-content: space-between;
        cursor: pointer;
        box-shadow: 0 14px 28px rgba(0,0,0,0.25),
        0 10px 10px rgba(0,0,0,0.22);
        transition: 0.4s;
        background: #e00f0fc5;
    }

    .cardBox .card .numbers {
        position: relative;
        font-weight: 500;
        font-size: 2.5rem;
        color: var(--blue);
    }

    .cardBox .card .cardName {
        color: var(--black2);
        font-size: 1.1rem;
        margin-top: 5px;
    }

    .cardBox .card .iconBx {
        font-size: 3.5rem;
        color: var(--black2);
    }

    .cardBox .card:hover {
        box-shadow: 0 3px 6px rgba(0,0,0,0.16),
        0 3px 6px rgba(0,0,0,0.23);
        transform: translate(0px, -8px);
    }
        .cardBox .card:hover .numbers,
        .cardBox .card:hover .cardName,
        .cardBox .card:hover .iconBx {
        color: var(--white);
    }

  </style>
</head>

<body>
  <h4 style="text-align:center">Sistem Data Siswa</h4>
  <!-- ======================= Cards ================== -->
  <div class="cardBox">
    <div class="card">
      <div>
        <div class="numbers">16</div>
        <div class="cardName">Total Keseluruhan Siswa</div>
      </div>

      <div class="iconBx">
        <ion-icon name="people-outline"></ion-icon>
      </div>
    </div>

    <div class="card">
      <div>
        <div class="numbers">10</div>
        <div class="cardName">Total Keseluruhan Siswa Laki-Laki</div>
      </div>

      <div class="iconBx">
        <ion-icon name="man-outline"></ion-icon>
      </div>
    </div>

    <div class="card">
      <div>
        <div class="numbers">6</div>
        <div class="cardName">Total Keseluruhan Siswa Perempuan</div>
      </div>

      <div class="iconBx">
        <ion-icon name="woman-outline"></ion-icon>
      </div>
    </div>
  </div>

  <!-- ====== ionicons ======= -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>