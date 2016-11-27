import sys
import time
import json
import random
    for i in range(10):
        data = ['value' : random.randint(1,50),]
        data3.append(data)
    json_str = json.dumps(data3)
    with open('data.json', 'w') as  w:
        json.dump(data3, w)
    print(data3)
    time.sleep(5)
