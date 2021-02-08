from pymodbus.client.sync import ModbusSerialClient

# port="/dev/ttyACM0"
client = ModbusSerialClient(method='ascii', port="/dev/ttyUSB0", stopbits=1, bytesize=8, baudrate=38400, parity='O', timeout=1)

connection = client.connect()
if connection:print "connected"

result = client.read_coils(1,6,unit=0x01)
parts = client.read_coils(7,8,unit=0x01)

d = open('parts.txt', 'w')
d.write(parts)
d.close()

f = open('ascii.txt', 'w')
f.write(result)
f.close()

client.close()
