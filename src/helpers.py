import re
import sys
from base64 import b64decode, b64encode

def deobfuscate_val(obfuscated_val):
    #Fix the string to parse it with Python
    replace_table = "\x5c\x2a\x38\x4d\x5f\x29\x2b\x68\x6b\x35\x37\x67\x73\x7c\x44\x5b\x36\x48\x61\x39\x6f\x23\x52\x6c\x58\x32\x33\x3e\x5d\x46\x65\x2c\x62\x6d\x4f\x2f\x0a\x4b\x7e\x79\x45\x27\x71\x53\x50\x56\x6e\x5a\x3f\x76\x4a\x60\x64\x6a\x7b\x42\x77\x72\x51\x09\x2d\x57\x78\x54\x28\x22\x59\x26\x66\x20\x7a\x21\x75\x69\x43\x4c\x34\x5e\x2e\x55\x3a\x3b\x31\x30\x25\x40\x49\x63\x74\x3d\x7d\x3c\x4e\x41\x70\x24\x0d\x47"

    indexes = re.findall("\[([0-9]+)\]", obfuscated_val)
    chars = []
    for i in indexes:
        chars.append(replace_table[int(i)])

    return "".join(chars)

def parse_line(line):
    parts = line.split("=")

    clean_line = []
    for part in parts:
        clean_line.append(deobfuscate_val(part))
        clean_line.append("=")

    del clean_line[-1]

    return "".join(clean_line)

php_code = """
$GLOBALS['vf8bae'][18].$GLOBALS['vf8bae'][10].$GLOBALS['vf8bae'][18].$GLOBALS['vf8bae'][9].$GLOBALS['vf8bae'][25].$GLOBALS['vf8bae'][19].$GLOBALS['vf8bae'][87].$GLOBALS['vf8bae'][68].$GLOBALS['vf8bae'][60].$GLOBALS['vf8bae'][26].$GLOBALS['vf8bae'][68].$GLOBALS['vf8bae'][25].$GLOBALS['vf8bae'][2].$GLOBALS['vf8bae'][60].$GLOBALS['vf8bae'][76].$GLOBALS['vf8bae'][83].$GLOBALS['vf8bae'][26].$GLOBALS['vf8bae'][83].$GLOBALS['vf8bae'][60].$GLOBALS['vf8bae'][18].$GLOBALS['vf8bae'][76].$GLOBALS['vf8bae'][32].$GLOBALS['vf8bae'][9].$GLOBALS['vf8bae'][60].$GLOBALS['vf8bae'][16].$GLOBALS['vf8bae'][76].$GLOBALS['vf8bae'][30].$GLOBALS['vf8bae'][30].$GLOBALS['vf8bae'][26].$GLOBALS['vf8bae'][68].$GLOBALS['vf8bae'][26].$GLOBALS['vf8bae'][68].$GLOBALS['vf8bae'][19].$GLOBALS['vf8bae'][2].$GLOBALS['vf8bae'][26].$GLOBALS['vf8bae'][82]"""

for line in php_code.split(";"):
    print parse_line(line)
