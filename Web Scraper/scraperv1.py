# Imports

import requests
import re
from bs4 import BeautifulSoup
import re

# Pricing pages

result = requests.get("https://www.bluehost.com/special/wordpress")

# Checks to see if the website is accessible. 200 code means OK

print(result.status_code)

src = result.content
soup = BeautifulSoup(src, 'html.parser')

# print(soup.prettify())
x = soup.find_all('div', class_='plan-foot')
# print(x)
# re.findall(([0-9.]*[0-9]+), x)