<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- <link rel="stylesheet" href="<?= base_url("css/main.css") ?>"> -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-zinc-100">
    <main class="w-full min-h-screen max-w-4xl bg-white mx-auto">
        <header class="px-5 py-3 bg-zinc-100 text-sky-500 flex items-center justify-between">
            <h2 class="text-xl font-bo">Admin</h2>
            <a href="<?= base_url("admin/siswa/tambah") ?>" class="px-3 py-2 bg-sky-500 text-white rounded">Tambah</a>
        </header>
        <div>
            <table class="table-auto w-full">
                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                    <tr>
                        <th class="p-2">
                            <div class="font-semibold text-left">nis</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-left">nama</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-left">tempat, tanggal lahir</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-right">alamat</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-right">Jenis kelamin</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-right">agama</div>
                        </th>
                    </tr>
                </thead>

                <tbody class="text-sm divide-y divide-gray-100">
                    <?php foreach ($siswa as $key => $data): ?>
                        <tr>
                            <td class="p-2">
                                <div class="text-left capitalize">
                                    <?= $data["nis"] ?>
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-left capitalize">
                                    <?= $data["nama"] ?>
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-left capitalize">
                                    <?= "{$data['tempat_lahir']}, {$data['tgl_lahir']}" ?>
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-left capitalize">
                                    <?= $data["alamat"] ?>
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-left capitalize">
                                    <?= $data["jenis_kelamin"] ?>
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-left capitalize">
                                    <?= $data["agama"] ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>