<?php require_once('components/header.php')?>
     <div class="container-fluid">
        <div class="row">
        <?php require_once('components/nav.php')?>
            <div class="col-10 my-3">
              <h1>data produk</h1>
              <div>
              <button type="button" class="btn btn-success">Success</button>
              </div>
              <table class="table">
            <thead>
                <tr>
                <th scope="col">no</th>
                <th scope="col">kode tim</th>
                <th scope="col">harga bayaran</th>
                <th scope="col">foto pasukan</th>
                <th scope="col">memesan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row"
                class="align-middle">1</th>
                <td class="align-middle">tentara bayaran</td>
                <td class="align-middle">$300.000</td>
                <td class="align-middle"><img src="the sentinal 2.jpg" alt="" width="80px"></td>
                <td><button type="button" class="btn btn-success">bikin kontrak</button> <button type="button" class="btn btn-danger">membatalkan kontrak</button></td>
                </tr>
                <tr>
                <th scope="row"
                class="align-middle">2</th>
                <td class="align-middle">tentara bayaran </td>
                <td class="align-middle">$500.000</td>
                <td class="align-middle"><img src="the sentinal 2.jpg" alt="" width="80px"></td>
                <td ><button type="button" class="btn btn-success">bikin kontrak</button> <button type="button" class="btn btn-danger">membatalkan kontrak</button></td>
                </tr>
                <tr>
                <th scope="row"
                class="align-middle">3</th>
                <td  class="align-middle">tentara bayaran </td>
                <td  class="align-middle">$600.000</td>
                <td  class="align-middle"><img src="the sentinal 2.jpg" alt="" width="80px"></td>
                <td><button type="button" class="btn btn-success">bikin kontrak</button> <button type="button" class="btn btn-danger">membatalkan kontrak</button></td>
                </tr>
                <tr>
                
            </tbody>
            </table>
            </div>

        </div>
     </div>
<?php require_once('components/footer.php')?>
    