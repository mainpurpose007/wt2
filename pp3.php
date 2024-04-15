<html>
<body>
<form method=post action="<?php echo $_SERVER['PHP_SELF']?>">
Enter User Name : <input type=text name=user><br><br>
Enter Password : <input type=password name=pass><br><br>
<input type=submit name=submit value="Log In">
</form>
<?php
session_start();
if(isset($_POST['submit']))
{
$user=$_POST['user'];
$pass=$_POST['pass'];
if(isset($_SESSION['count']))
{
$count=$_SESSION['count'];
}
else
{
$count=0;
}
$count++;
$_SESSION['count']=$count;
if(isset($user) && isset($pass) && $count<=3 && $user===$pass)
{
echo"Welcome..Login Successful";
}
if($count>3)
{
echo "3 attempts are over";
}
}
?>
</body>
</html>


import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression
from sklearn.preprocessing import StandardScaler

# Generating synthetic data
np.random.seed(0)
num_samples = 1000

# Randomly generating user ID
user_ids = np.arange(1, num_samples + 1)

# Generating random values for gender (0: female, 1: male)
gender = np.random.randint(0, 2, num_samples)

# Generating random values for age between 18 and 70
age = np.random.randint(18, 71, num_samples)

# Generating random values for estimated salary
salary = np.random.normal(50000, 15000, num_samples)

# Generating random values for purchased (0: not purchased, 1: purchased)
purchased = np.random.randint(0, 2, num_samples)

# Creating DataFrame
data = pd.DataFrame({
    'User ID': user_ids,
    'Gender': gender,
    'Age': age,
    'Estimated Salary': salary,
    'Purchased': purchased
})

# Identifying independent and target variables
X = data[['Gender', 'Age', 'Estimated Salary']]
y = data['Purchased']

# Splitting the data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=42)

# Feature scaling
scaler = StandardScaler()
X_train_scaled = scaler.fit_transform(X_train)
X_test_scaled = scaler.transform(X_test)

# Building a logistic regression model
model = LogisticRegression()
model.fit(X_train_scaled, y_train)

# Printing the training and testing sets
print("Training set:")
print(X_train_scaled)
print(y_train)
print("\nTesting set:")
print(X_test_scaled)
print(y_test)
