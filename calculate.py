import sys
import math
from datetime import datetime

a = float(sys.argv[1])
b = float(sys.argv[2])
c = float(sys.argv[3])

c_cubed = c ** 3
sqrt_c_cubed = math.sqrt(c_cubed)
division = sqrt_c_cubed / a
multiplied = division * 10
result = b + multiplied
timestamp = datetime.now().strftime("%Y-%m-%d %H:%M:%S")

print(result)       
print(c)            
print(c_cubed)      
print(sqrt_c_cubed) 
print(division)     
print(multiplied)   
print(b)            
print(a)            
print(timestamp)    