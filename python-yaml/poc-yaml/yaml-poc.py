from yaml import * 

data = b"""!!python/object/apply:subprocess.Popen
- !!python/tuple
  - ls
  - -al
"""
deserialized_data = load(data,  Loader=Loader) # deserializing data
print(deserialized_data)