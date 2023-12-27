    <div class="container">
        <div class="h-100 p-5 text-white bg-dark rounded-3 mt-4">
            <h1>Selamat Datang di halaman <?= $data['header'] ?></h1> 
            <p>Nama kamu adalah <?= $data['name'] ?></p>
            <p>Kamu sedang mengaskses <?= end($data) ?></p>
            <button class="btn btn-outline-light" type="button">Example button</button>
        </div>
    </div>
