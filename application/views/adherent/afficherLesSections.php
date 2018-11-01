<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h6 class="card-title"><?php echo $TitreDeLaPage ?></h6>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered text-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">section</th>
                        <th scope="col">code federation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lesSections as $uneSection):
                        echo '<tr>
                            <td>'.anchor('responsable/afficherUneSection/'.$uneSection['NUMEROSECTION'],$uneSection['LIBELLESECTION']).'</td>                         
                            <td>'.$uneSection['CODEFEDERATION'].'</td>
                        </tr>';
                    endforeach ?>
                </tbody>
            </table>
        </div>
    </div> 
</div><br>
      


