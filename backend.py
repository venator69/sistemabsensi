import mysql.connector
import json
from datetime import datetime
# opening the file location
file_path = r'C:\Users\denni\Downloads\data_absen (3).json'
with open(file_path, 'r') as file:
    json_data = file.read()

data = json.loads(json_data)


# Convert date and time strings to datetime objects
data['tanggal'] = datetime.strptime(data['tanggal'], '%Y-%m-%d')
data['waktu'] = datetime.strptime(data['waktu'], '%H-%M-%S')

# Cast masuk to boolean if necessary
data['masuk'] = bool(data['masuk'])

# Make sure nik is a string
data['nik'] = str(data['nik'])

db = mysql.connector.connect(
    host="localhost",
    user="root",
    passwd="alskdjfhg27182",
    database="absendb"
)

mycursor = db.cursor()
sql = "INSERT INTO test (tanggal_absen, waktu_absen, masuk, nik) VALUES (%s, %s, %s, %s)"

mycursor.execute(sql, (data['tanggal'], data['waktu'], data['masuk'], data['nik']))

db.commit()

mycursor.close()
db.close()
