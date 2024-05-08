<form method="POST" action="<?php  echo base_url(); ?>profile/get_profile">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">  Edit Profile</h1>
        </div>
            
        <div class="container">

            <div class="row">
                <div class="col-4">
                    <label for="clients">Full Name</label>
                    <input class="col-12" type="text" id="name" name="name" class="form-control" required autofocus>
                </div>

                <div class="col-4">
                <label for="type">User Type</label>
                    <select class="col-12" name="type" id="type" required>
                        <option value="Rep">Representative</option>
                        <option value="Client">Client</option>
                    </select>
                </div>

                <div class="col-4">
                    <label for="bonuses">Bonuses</label>
                    <input class="col-12" type="number" id="bonuses" name="bonuses" class="form-control" required autofocus>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <label for="commission">Set Commission Rate %</label>
                    <input class="col-12" type="number" id="commission" name="commission" class="form-control" required autofocus>
                </div>

                <div class="col-6">
                    <label for="tax">Set Tax Rate %</label>
                    <input class="col-12" type="number" id="tax" name="tax" class="form-control" required autofocus>
                </div>
            </div>      
        </div>
    </div>
<br>
        <div class="button-container">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Edit Profile</button>        
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