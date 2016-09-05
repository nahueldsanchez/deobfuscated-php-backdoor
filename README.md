# deobfuscated-php-backdoor
Repository containing the original obfuscated code and the deobfuscated version
for some shell/backdoor I've found in a compromised wordpress installation
which was distributing spam.

## File list
- **system.php:** Original backdoor, without any change as I found it in the compromised server
- **deobfuscated_system.php:** Deobfuscated backdoor.
- **encode.php**: Simple script that I made to interact with the backdoor.
- **helpers.py**: Some Python functions that I've used to deobfuscate the backdoor.
