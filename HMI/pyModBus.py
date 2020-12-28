from pymodbus.client.sync import ModbusSerialClient

# port="/dev/ttyACM0"
client = ModbusSerialClient(method='ascii', port="/dev/ttyUSB0", stopbits=1, bytesize=8, baudrate=9600, parity='N', timeout=1)

connection = client.connect()
if connection:print "connected"

result = client.read_coils(1,6,unit=0x01)

f = open('ascii.txt', 'r')
print f.read()
f.close()

f = open('ascii.txt', 'w')
f.write(result)
print result
f.close()

client.close()
