
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Students</li>
        </ol>
    </nav>
</div>
<div class="container container-box mt-4">
    <div class="row">
        <div class="col-12">
            <?php Flasher::flash(); ?>
            <div class="row">
                <div class="col-8">
                    <h3><?= $data['title'] ?></h3>
                </div>
                <div class="col-4 text-right">
                    <!-- Button trigger modal -->
                    <span data-toggle="modal" data-target="#formModal">
                        <button type="button" class="btn btn-outline-primary modalAdd" data-toggle="tooltip" title="Add Student" data-placement="bottom">
                            <i class="fas fa-plus"></i> <b>New</b>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12">
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered table-hover dataTables">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width: 10%;">Action</th>
                            <th>NIM</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['result'] as $item) : ?>
                            <tr>
                                <td>
                                    <span data-toggle="modal" data-target="#formModal">
                                        <button class="btn btn-sm btn-outline-warning modalEdit" data-toggle="tooltip" title="Edit student" data-id="<?= $item['id'] ?>">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </span>
                                    &nbsp;
                                    <a href="<?= BASEURL . '/students/destroy/' . $item['id'] ?>" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" title="Delete student" onclick="return confirm('Are you sure?')"> 
                                        <i class="fa fa-trash"></i> 
                                    </a>
                                </td>
                                <td> <a href="<?= BASEURL . '/students/show/' . $item['id'] ?>" class="href" data-toggle="tooltip" title="Detail student"><?= $item['nim'] ?></a></td>
                                <td><?= $item['nama'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <td><?= $item['jurusan'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>