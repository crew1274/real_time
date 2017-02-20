   import sys
   import pymysql.cursors

   sys.path.insert(0, '/home/pi/newcode')

   import dae as DAE
   import time

# Connect to the database
#print ('Number of arguments:', len(sys.argv), 'arguments.')
#print ('Argument List:', str(sys.argv))
try:
   daesql = DAE.SQL()
    #ser = DAE.ModbusSerial()
  #settings = daesql.getSettings()
   # meter circuit settings
    #highCode = settings['highCode']
   #lowCode = settings['lowCode']
    #baudrate = settings['baudrate']
   #obj = settings['obj']
    #address = obj['address']
   #ch = obj['ch']
    #ser.writeMeterCircuit(highCode, lowCode, address, ch, baudrate, 1)
 #time.sleep(2)
   # test response
  #response = ser.writeCommandToModbus([1,3,96,0,0,2])
    #if response != []:
     # valid
 sql = "UPDATE `demand`.`settings` SET `token` = '1' WHERE `settings`.`id` = {0};".format(sys.argv[1])

  daesql.executeSQL(sql)
  print("id:",str(sys.argv[1]), "vaild Successfully!")
  #else:
    #    print("no response.")
finally:
  daesql.closeConnection()
