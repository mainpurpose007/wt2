font.html
<html>
<body>
<form action="font.php" method="post">
<center>
<b>Select font style :</b><input type=text name=style> <br>
<b>Enter font size : </b><input type=text name=size><br>
<b>Enter font color : </b><input type=text name=color><br>
<b>Enter background color :</b> <input type=text name=bg><br>
<input type=submit value="Next">
</center>
</form>
</body>
</html>


font.php
<?php
$style=$_POST['style'];
$size=$_POST['size'];
$color=$_POST['color'];
$bg=$_POST['bg'];
echo"<br> Style is: ".$style;
echo"<br> Size is: ".$size;
echo"<br> Color is: ".$color;
echo"<br> Background color is: ".$bg;
setcookie("c1",$style,time()+3600);
setcookie("c2",$size,time()+3600);
setcookie("c3",$color,time()+3600);
setcookie("c4",$bg,time()+3600);
?>
<html>
<body>
<form action="font1.php">
<input type=submit value=OK>
</form>
</body>
</html>


font 1 .php
<?php
$style = $_COOKIE['c1'];
$size = $_COOKIE['c2'];
$color = $_COOKIE['c3'];
$bg= $_COOKIE['c4'];
$msg = "Welcome to Web technologies";
echo "<body bgcolor=$bg>";
echo "<font size=$size color=$color>$msg</font></body>";
?>


python

import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression

np.random.seed(0)
num_samples = 1000

experience = np.random.uniform(0, 20, num_samples)
salary = 3000 * experience + np.random.normal(0, 5000, num_samples)

data = pd.DataFrame({'Experience': experience, 'Salary': salary})

X = data[['Experience']]
y = data['Salary']

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=42)

model = LinearRegression()
model.fit(X_train, y_train)

print("Training set:")
print(X_train)
print(y_train)
print("\nTesting set:")
print(X_test)
print(y_test)
