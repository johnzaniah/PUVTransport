import time
import serial
import pynmea2


port = "/dev/ttyAMA0"
ser = serial.Serial(port, baudrate=9600, timeout=5)
dataout = pynmea2.NMEAStreamReader()

  
while True:
    
    try:
        
        newdata=ser.readline()
    
    except:
        
        print("Calibrating Location..")
    
    if newdata[0:6] == '$GPGGA':
        newmsg = pynmea2.parse(newdata)
        lat = newmsg.latitude
        hor_dir = newmsg.lat_dir
        print(str(hor_dir) + " "+ str(lat))
        lng = newmsg.longitude
        ver_dir = newmsg.lon_dir
        print(str(ver_dir)+ " " + str(lng))
        
        time.sleep(5)