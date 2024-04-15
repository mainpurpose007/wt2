emp.html
<html>
<body>
<form action="emp.php" method="get">
<center> <h2>Enter Enployee Details :</h2> <br>
<b>Emp no :</b><input type=text name=eno><br>
<b> Name :</b><input type=text name=ename><br>
<b>Address :</b><input type=text name=eadd><br>
<input type=submit value=Show name=submit>
</center>
</form>
</body>
</html>

emp..php
<?php
session_start();
$eno = $_GET['eno'];
$ename= $_GET['ename'];
$eadd = $_GET['eadd'];
$_SESSION['eno'] = $eno;
$_SESSION['enm'] = $ename;
$_SESSION['eadd'] = $eadd;
?>
<html>
<body>
<form action="display.php" method="post">
<center>
<h2>Enter Earnings of Employee:</h2>
Basic : <input type="text" name="e1"><br>
DA : <input type="text" name="e2"><br>
HRA : <input type="text" name="e3"><br>
<input type="submit" value=Next>
</center>
</form>
</body>
</html>



display.php
<?php
session_start();
$e1 = $_POST['e1'];
$e2 = $_POST['e2'];
$e3= $_POST['e3'];
echo "<h3>Employee Details</h3> ";
echo "Name : ".$_SESSION['eno']."<br>";
echo "Address : ".$_SESSION['enm']."<br>";
echo "Class : ".$_SESSION['eadd']."<br>";
echo "Basic : ".$e1."<br>";
echo "DA : ".$e2."<br>";
echo "HRA : ".$e3."<br>";
$total = $e1+$e2+$e3;
echo "<h2>Total Of Earnings Is : ".$total."</h2>";
?>


Python

import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn.metrics import mean_squared_error

# Generating synthetic data
np.random.seed(0)
num_samples = 1000

# Generating random values for length and width
length = np.random.uniform(10, 50, num_samples)
width = np.random.uniform(5, 25, num_samples)

# Generating random values for weight based on length and width
weight = 0.5 * length + 0.7 * width + np.random.normal(0, 5, num_samples)

# Creating DataFrame
data = pd.DataFrame({'Length': length, 'Width': width, 'Weight': weight})

# Identifying independent and target variables
X = data[['Length', 'Width']]
y = data['Weight']

# Splitting the data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=42)

# Building a linear regression model
model = LinearRegression()
model.fit(X_train, y_train)

# Making predictions
y_pred_train = model.predict(X_train)
y_pred_test = model.predict(X_test)

# Evaluating the model
train_rmse = np.sqrt(mean_squared_error(y_train, y_pred_train))
test_rmse = np.sqrt(mean_squared_error(y_test, y_pred_test))

print("Training RMSE:", train_rmse)
print("Testing RMSE:", test_rmse)



