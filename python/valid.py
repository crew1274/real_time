import sys
if sys.platform == 'win32':
  exit()
else:
  sys.path.insert(0, '/')
import pymysql.cursors
import time
import dae as DAE
try:
  daesql = DAE.SQL()
  sql = "UPDATE `demand`.`settings` SET `token` = '1' WHERE `settings`.`id` = {0};".format(sys.argv[1])
  daesql.executeSQL(sql)
  print("id:",str(sys.argv[1]), "vaild Successfully!")
finally:
  daesql.closeConnection()
