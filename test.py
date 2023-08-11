import mysql.connector
import json

# turns JSON data from file into an array
file_path = r'"C:\Users\denni\Downloads\data_absen (1).json"'
with open(file_path, 'r') as file:
    json_data = file.read()


data_array = json.loads(json_data)
print(type(data_array['tanggal']),type(data_array['waktu']),type(data_array['masuk']),type(data_array['nik']))

db = mysql.connector.connect(
    host = "localhost",
    user = "root",
    passwd="alskdjfhg27182",
    database ="absendb"
)
mycursor = db.cursor()
mycursor.execute("INSERT INTO test VALUES(data_array['tanggal'],data_array['waktu'],data_array['masuk'],data_array['nik']);")