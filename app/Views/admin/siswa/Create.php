<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin | Siswa</title>
</head>

<body class="bg-zinc-100">
    <main class="w-full min-h-screen max-w-3xl mx-auto">
        <header class="flex items-center px-3 py-2">
            <div class="flex items-center gap-x-3 flex-1 w-full">
                <a href="<?= base_url("admin/siswa") ?>"
                    class="text-sky-700 p-2 rounded-lg bg-sky-200 border border-sky-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                </a>
                <h3 class="text-lg font-semibold text-black">Kembali</h3>
            </div>
        </header>
        <form action="<?= base_url("admin/siswa/tambah") ?>" method="post">
            <div class="w-full px-3 py-2 bg-white flex flex-col gap-y-3">
                <input type="number" inputmode="numeric" name="nis" id=""
                    class="border-b-2 border-b-sky-500 outline-none w-full px-3 py-2" placeholder="NIS">
                <input type="text" name="nama" id="" class="border-b-2 border-b-sky-500 outline-none w-full px-3 py-2"
                    placeholder="Nama">
                <input type="text" name="kelas" id="" class="border-b-2 border-b-sky-500 outline-none w-full px-3 py-2"
                    placeholder="Kelas">
                <input type="text" name="tempat_lahir" id=""
                    class="border-b-2 border-b-sky-500 outline-none w-full px-3 py-2" placeholder="Tempat Lahir">
                <input type="date" name="tanggal_lahir" id=""
                    class="border-b-2 border-b-sky-500 outline-none w-full px-3 py-2" placeholder="Tanggal Lahir">
                <input type="text" name="alamat" id="" class="border-b-2 border-b-sky-500 outline-none w-full px-3 py-2"
                    placeholder="Alamat">
                <div class="flex items-center gap-x-3 px-3 py-2">
                    <label for="laki">
                        <input type="radio" name="jenis_kelamin" id="laki" value="laki-laki">
                        Laki-laki
                    </label>
                    <label for="perempuan">
                        <input type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                        Perempuan
                    </label>
                </div>
                <div class="flex items-center gap-x-3">
                    <select name="agama" class="px-3 py-2 bg-white border border-sky-600 rounded">
                        <option value="-">Agama</option>
                        <option value="islam">islam</option>
                        <option value="kristen">kristen</option>
                        <option value="katolik">katolik</option>
                        <option value="budha">budha</option>
                        <option value="hindu">hindu</option>
                        <option value="protestan">protestan</option>
                        <option value="konghuchu">konghuchu</option>
                    </select>
                </div>
                <button type="submit"
                    class="px-3 py-2 rounded bg-sky-500 outline-none hover:bg-sky-600 text-white uppercase font-semibold">Simpan</button>
            </div>
        </form>
    </main>
</body>

</html>