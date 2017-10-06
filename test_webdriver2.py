# -*- coding: utf-8 -*-
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import Select
from selenium.common.exceptions import NoSuchElementException
import unittest, time, xlrd, re

email = "aokiri@capa.co.jp"
password = "aoki"
itemid = "ITEMIMAGE_00020002"
quantity = 2

class TestWebdriver(unittest.TestCase):
    def setUp(self):
        self.driver = webdriver.Chrome('C:\Python27\Lib\selenium\chromedriver')
        self.driver.implicitly_wait(30)
#        self.base_url = "http://13.114.58.221:8080/ordering-manage/servlet/com.orderingmanage.gamexamplelogin"

#iblにログイン
    def test_webdriver(self):
        driver = self.driver
        driver.get('http://13.114.58.221:8080/ordering-manage/servlet/com.orderingmanage.gamexamplelogin')
        time.sleep(1)
        #ユーザー名とパスワードの入力
        login_in = driver.find_element_by_id("vUSERNAME")
        password_in = driver.find_element_by_id("vUSERPASSWORD")
        login_in.send_keys(email)
        time.sleep(3)
        password_in.send_keys(password)
        time.sleep(3)
        driver.save_screenshot("screenshot6.png")
        #ログインする
        driver.find_element_by_name("BTNENTER").click()
        time.sleep(3)

#iblで商品選択
#    def item_choose(self):
        #商品を選ぶ
        driver.find_element_by_id(itemid).click()
        time.sleep(3)
        #数量を入力する
        driver.find_element_by_id("vQUANTITY_0001").send_keys(quantity)
        time.sleep(3)
        #カートへ追加ボタン
        driver.find_element_by_name("BTNORDER").click()
        time.sleep(3)
        #注文を確定
        driver.find_element_by_name("BTNORDERKAKUTEI").click()
        time.sleep(3)


#    def tearDown(self):
#        self.driver.quit()

if __name__ == "__main__":
    unittest.main()
