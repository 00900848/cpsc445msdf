# Imports

import requests
import re
from bs4 import BeautifulSoup

# Pricing pages

result = requests.get("https://www.bluehost.com/special/wordpress")

# Checks to see if the website is accessible. 200 code means OK

print(result.status_code)

src = result.content
soup = BeautifulSoup(src, 'html.parser')

# print(soup.prettify())

# Bluehost details and prices

# prices = soup.find_all('div', class_='plan-foot')
# everything = soup.find_all('div', class_='bh-plan text-center list-view')
plan_details = soup.find_all('ul', class_='list-unstyled bh-plan-list')
print(plan_details)
# re.find_all([-+]?[0-9]*(\.[0-9]+), x)
