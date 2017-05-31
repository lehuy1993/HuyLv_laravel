<!DOCTYPE html>
<html>
<head>
    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
    <style>
        body     { padding-top:30px; }
    </style>
    
    <!-- JS -->
    <script src="https://code.angularjs.org/1.4.0-rc.1/angular.js"></script>
    +
</head>
<body ng-app="validationApp" ng-controller="mainController">
<div class="container">
    
    <!-- PAGE HEADER -->
    <div class="page-header"><h1>AngularJS Form Validation</h1></div>
   
    <!-- =================================================================== -->
    <!-- FORM ============================================================== -->
    <!-- =================================================================== -->
    
    <!-- pass in the variable if our form is valid or invalid -->
    <form name="userForm" ng-submit="submitForm(userForm.$valid)" novalidate>

        <!-- NAME -->
        <div class="form-group" ng-class="{ 'has-error' : userForm.name.$invalid && !userForm.name.$pristine }">
            <label>Name*</label>
            <input type="text" name="name" class="form-control" ng-model="user.name" required>
            <p ng-show="userForm.name.$invalid && !userForm.name.$pristine" class="help-block">You name is required.</p>
        </div>
        
        <!-- USERNAME -->
        <div class="form-group" ng-class="{ 'has-error' : userForm.username.$invalid && !userForm.username.$pristine }">
            <label>Username</label>
            <input type="text" name="username" class="form-control" ng-model="user.username" ng-minlength="3" ng-maxlength="8">
            <p ng-show="userForm.username.$error.minlength" class="help-block">Username is too short.</p>
            <p ng-show="userForm.username.$error.maxlength" class="help-block">Username is too long.</p>
        </div>
            
        <!-- EMAIL -->
        <div class="form-group" ng-class="{ 'has-error' : userForm.email.$invalid && !userForm.email.$pristine }">
            <label>Email</label>
            <input type="email" name="email" class="form-control" ng-model="user.email">
            <p ng-show="userForm.email.$invalid && !userForm.email.$pristine" class="help-block">Enter a valid email.</p>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
    
    <!-- =================================================================== -->
    <!-- VALIDATION TABLES ================================================= -->
    <!-- =================================================================== -->
    <div class="page-header"><h1>Validation Tables</h1></div>
    
    <div class="row">
        <div class="col-xs-3">
            <h3>Form</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td ng-class="{ success: userForm.$valid, danger: userForm.$invalid }">Valid</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: userForm.$pristine, danger: !userForm.$pristine }">Pristine</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: userForm.$dirty }">Dirty</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-xs-3">
            <h3>Name</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td ng-class="{ success: userForm.name.$valid, danger: userForm.name.$invalid }">Valid</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: userForm.name.$pristine, danger: !userForm.name.$pristine }">Pristine</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: userForm.name.$dirty }">Dirty</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: userForm.name.$touched }">Touched</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-xs-3">
            <h3>Username</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td ng-class="{ success: userForm.username.$valid, danger: userForm.username.$invalid }">Valid</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: userForm.username.$pristine, danger: !userForm.username.$pristine }">Pristine</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: userForm.username.$dirty }">Dirty</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: userForm.username.$touched }">Touched</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-xs-3">
            <h3>Email</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td ng-class="{ success: userForm.email.$valid, danger: userForm.email.$invalid }">Valid</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: userForm.email.$pristine, danger: !userForm.email.$pristine }">Pristine</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: userForm.email.$dirty }">Dirty</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: userForm.email.$touched }">Touched</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</div>
</body>
</html>
