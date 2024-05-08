<div class="container-fluid" id="generatePDF">
<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <img src="<?php echo base_url() ?>data/OI.png" width="150" height="150">
        <h1 class="h1 mb-0 text-gray-800">Buyer Created Tax Invoice</h1>
        <button id="pdfButton" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate PDF</button>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <p class="h3 mb-0 text-gray-800">Adviser No. 484106 Jack Sparrow </p>
        <p class="h3 mb-0 text-gray-800">09/05/2024</p>
    </div>

    <br>

    <div class="row">
        <div class="col-4">
            <p class="font-weight-bold">Produced on:</p> 
            <p class="mb-0"> 09/05/2024</p>
            <p class="mb-0"> 27C Mauranui Avenue, Epsom, Auckland 1021, New Zealand</p> 
        </div>


        <div class="col-4"> 
            <p class="font-weight-bold">Produced by:</p>
            <p class="mb-0">Online Insure Company<br>27C Mauranui Avenue, Epsom, Auckland 1021, New Zealand</p> 
        </div>


        <div class="col-4"> 
            <p class="mb-0"><em>Statement Date:</em> 09/05/2024</p>
            <p class="mb-0"><em>Payment Type:</em> Debit Card</p> 
        </div>        
    </div>
    <br>    
    <br>

    <p class="h4 mb-0 text-gray-800">Buyer Created Tax Invoice</p>

    <table class="table">
    <thead class="thead-light">
        <tr>
        <th scope="col">Date</th>
        <th scope="col">Commissions</th>
        <th scope="col">Bonuses</th>
        <th scope="col">Total</th>
        </tr>
    </thead>
    <tbody>
    <?php

        foreach ($data as $show):
            $commission = 1000;
            $net = $show->bonuses + $commission;
            $tax = $show->bonuses + $commission * 0.05;
            ?>
            <tr>

                <td><?php echo $show->date?></td>
                <td>$1,000</td>
                <td><?php echo $show->bonuses?></td>
                <td><?php echo $show->bonuses + $commission ?></td>
            </tr>

            <?php

        endforeach;
        ?>
    </tbody>
    </table>

    <div class="row">
        <div class="col-4">
            <p class="font-weight-bold">Net:</p> 
            <p class="mb-0"><?php echo $net ?></p>
        </div>


        <div class="col-4"> 
            <p class="font-weight-bold">Tax:</p>
            <p class="mb-0">5%</p> 
        </div>

        <div class="col-4"> 
            <p class="font-weight-bold">Payment Amount:</p>
            <p class="mb-0"><?php echo $net - $tax?></p> 
        </div>
       
    </div>
    <br>
    <br>

    <p class="h4 mb-0 text-gray-800">Detail Commission Statement</p>

    <table class="table">
    <thead class="thead-light">
        <tr>
        <th scope="col">Client Name</th>
        <th scope="col">Annual Premium</th>
        <th scope="col">Commission</th>
        <th scope="col">Balance</th>
        </tr>
    </thead>
    <tbody>
    <?php

        foreach ($data as $show):
            $commission = 1000;
            $ann =$commission * $show->bonuses;
            $tax = $show->bonuses + $commission * 0.05;
            ?>
            <tr>

                <td><?php echo $show->adviser?></td>
                <td><?php echo $ann?></td>
                <td><?php echo $commission?></td>
                <td><?php echo $ann - $commission ?></td>
            </tr>

            <?php

        endforeach;
        ?>
    </tbody>
    </table>
    </div>
</div>

<script>
    var button = document.getElementById("pdfButton");
    var makepdf = document.getElementById("generatePDF");
    button.addEventListener("click", function () {
        var mywindow = window.open("", "PRINT", "height=600,width=600");
        mywindow.document.write(makepdf.innerHTML);
        mywindow.document.close();
        mywindow.focus();
        mywindow.print();
        return true;
    });
   </script>