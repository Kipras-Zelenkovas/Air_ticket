<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <form class="container" method="POST">
        <div class="form-row">
            <div class="form-group col-12">
                <label for="input1">Asmens kodas</label>
                <input type="text" class="form-control" id="input1" name="code">
            </div>
            <div class="form-group col-12">
                <label for="input2">Vardas</label>
                <input type="text" class="form-control" id="input2" name="name">
            </div>
            <div class="form-group col-12">
                <label for="input3">Pavarde</label>
                <input type="text" class="form-control" id="input3" name="surname">
            </div>
            <div class="form-group col-12">
                <label for="from">Skrydžio numeris</label>
                <select id="from" class="form-control" name="from">
                    <option selected>Pasirinkite</option>
                    <?php foreach($flight_number as $code): ?>
                        <option value="<?=$code?>"><?=$code?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group col-12">
                <label for="input5">Kaina</label>
                <input type="text" class="form-control" id="input5" name="price">
            </div>
            <div class="form-group col-12">
                <label for="from">Iš kur</label>
                <select id="from" class="form-control" name="from">
                    <option selected>Pasirinkite</option>
                    <?php foreach($from as $f): ?>
                        <option value="<?=$f?>"><?=$f?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group col-12">
                <label for="to">Į kur</label>
                <select id="to" class="form-control" name="to">
                    <option selected>Pasirinkite</option>
                    <?php foreach($to as $t): ?>
                        <option value="<?=$t?>"><?=$t?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group col-12">
                <label for="weight">Bagažo svoris</label>
                <select id="weight" class="form-control" name="weight">
                    <option selected>Pasirinkite</option>
                    <?php foreach(range(1, 20) as $weight): ?>
                        <option value="<?=$weight?>"><?=$weight?></option>
                    <?php endforeach ?>
                    <option value="21">+20</option>
                </select>
            </div>
            <div class="form-group col-12">
                <label for="pastabos" class="form-label">Pastabos</label>
                <textarea class="form-control" placeholder="Palikite pastebėjumus" id="pastabos" name='comments'></textarea>
            </div>
            <div class="form-group ">
                <button class="btn btn-primary" type="submit" name="submit">Užsisakyti</button>
            </div>
        </div>
    </form>


    <?php if(isset($_POST['submit'])): ?>
        <?php if($_POST['weight'] == '21')
            $_POST['price'] += 20;
        ?>
        <table class="table">
            <thead>
                <tr>
                    <?php foreach($_POST as $key => $data): ?>
                        <?php if($key != 'submit'): ?>       
                            <th scope="col"><?=$key?></th>
                        <?php endif?>             
                    <?php endforeach ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($_POST as $key => $data): ?>
                        <?php if($key != 'submit'): ?>       
                            <th scope="col"><?=$data?></th>
                        <?php endif?>   
                    <?php endforeach ?>
                </tr>
            </tbody>
        </table>
    <?php endif?>

    
</body>
</html>