<input type="date">
<table class="table">
<thead>
        <tr>
            <th scope="col"> Datum/Tijd</th>
            <th scope="col">Aantal gasten</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
        </tr>
    </thead>
<?php include("./connect_db.php");
        $query = 'SELECT * FROM reservering';
        $result = mysqli_query($conn, $query);

        if ($result) {
            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {
?>

  

  </div>

    <tbody>
        <tr>
            <th scope="row"><?php echo $row['datum'] ?></th>
            <td><?php echo $row['personen'] ?></td>
            <td><?php echo $row['reservering_email'] ?></td>
            <td><button type="button" class="btn btn-primary">Annuleren</button></td>
            
        </tr>
    </tbody>

<?php
                } 
            }
        }
?>
</table>