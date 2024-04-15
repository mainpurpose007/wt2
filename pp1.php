<?php              //Session
session_start();
if(!isset($_SESSION['count']))
{
$_SESSION['count']=0;
}
else
{
$_SESSION['count']=$_SESSION['count']+1;
e cho"This page is accessed" .$_SESSION['count']. "times";
}
?>


<?php
if(!isset($_COOKIE['count']))       //Cookie
{
setcookie('count',0);
}
else
{
$count=$_COOKIE['count'];
setcookie('count',++$count);
echo"This page is accessed" .$_COOKIE['count']. "times";
}
?>





import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression

positions = np.array([1, 2, 3, 4, 5, 6, 7, 8, 9, 10])
salaries = np.array([45000, 50000, 60000, 80000, 110000, 150000, 200000, 300000, 500000, 1000000])
data = pd.DataFrame({'Position_Level': positions, 'Salary': salaries})

X = data[['Position_Level']]
y = data['Salary']

# Splitting the data into training and testing sets with a 7:3 ratio
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=42)

model = LinearRegression()
model.fit(X_train, y_train)

y_pred = model.predict(X_test)

print("Coefficients:", model.coef_)
print("Intercept:", model.intercept_)

print("\nTraining set:")
print(X_train)
print(y_train)
print("\nTesting set:")
print(X_test)
print(y_test)
