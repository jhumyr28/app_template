<form method="POST" action="<?php  echo base_url(); ?>payroll/get_pdf">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Payroll</h1>
        </div>
            
        <div class="container">

            <div class="row">
                <div class="col-3">
                    <label for="adviser">Select Adviser</label><br>
                    <select class="col-12" name="adviser" id="adviser" required>
                        <option value="Jack">Jack Sparrow</option>
                    </select>
                </div>

                <div class="col-6">
                    <label for="date">Date</label><br>
                    <input class="col-12" type="date" id="date" name="date" class="form-control" required>
                </div>
                
                <div class="col-3">
                    <label for="period">Period</label><br>
                    <select class="col-12" name="period" id="period" placeholder="Select Period" required>
                        <option value="weekly">Weekly</option>
                        <option value="Monthly">Monthly</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label for="clients">Number of Clients</label>
                    <input class="col-12" type="number" id="clients" name="clients" class="form-control" required autofocus>
                </div>

                <div class="col-6">
                    <label for="clients">Bonuses</label>
                    <input class="col-12" type="number" id="bonuses" name="bonuses" class="form-control" required autofocus>
                </div>
            </div>          
        </div>
    <br>
        <div class="button-container">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Create Payroll</button>        
        </div>    
    </div>
</form>




















<style>
    select {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 200px;
        margin-bottom: 15px;
    }
    
    option {
        font-size: 16px;
    } 
</style>    