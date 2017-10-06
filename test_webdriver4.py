# -*- coding: utf-8 -*-
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import Select
from selenium.common.exceptions import NoSuchElementException
import unittest, time, datetime, xlrd, re

ibl_email = "aokiri@capa.co.jp"
ibl_password = "aoki"
mse_email = "mse"
mse_password = "MSE"
itemid = "ITEMIMAGE_00020002"

#エクセル読み込み
book = xlrd.open_workbook('test_order.xls')
sheet_1 = book.sheet_by_index(0)
#for row in range(1,sheet_1.nrows):
#    for col in range(1,sheet_1.ncols):
quantity = str(int(sheet_1.cell(1,1).value))
request_date = str(sheet_1.cell(1,2).value)
s_method = sheet_1.cell(1,3).value
purpose = sheet_1.cell(1,5).value
itemcard = sheet_1.cell(1,6).value


class TestWebdriver(unittest.TestCase):
    def setUp(self):
        self.driver = webdriver.Chrome('C:\Python27\Lib\selenium\chromedriver')
        self.driver.implicitly_wait(30)
        self.base_url = "http://13.114.58.221:8080/ordering-manage/servlet/com.orderingmanage.gamexamplelogin"

#iblで商品選択ー確定
class ItemOrder(TestWebdriver):
    #iblにログイン
    def test_ibl_login(self):
        driver = self.driver
        driver.get('http://13.114.58.221:8080/ordering-manage/servlet/com.orderingmanage.gamexamplelogin')
        time.sleep(1)
        #ユーザー名とパスワードの入力
        login = driver.find_element_by_id("vUSERNAME")
        password = driver.find_element_by_id("vUSERPASSWORD")
        login.send_keys(ibl_email)
        time.sleep(1)
        password.send_keys(ibl_password)
        time.sleep(1)
        #ログインする
        driver.find_element_by_name("BTNENTER").click()
        time.sleep(2)
        #ログアウト
        driver.find_element_by_id("ACTIONLOGOUT_MPAGE").click()
        time.sleep(3)

#MSEで見積送料入力
#class EstimateShippingFee(TestWebdriver):
    #MSEにログイン
    def test_mse_login(self):
        #ユーザー名とパスワードの入力
        driver = self.driver
        login = driver.find_element_by_id("vUSERNAME")
        password = driver.find_element_by_id("vUSERPASSWORD")
        login.send_keys(mse_email)
        time.sleep(1)
        password.send_keys(mse_password)
        time.sleep(1)
        #ログインする
        driver.find_element_by_name("BTNENTER").click()
        time.sleep(1)
        #見積送料アイコンを選ぶ
        driver.find_element_by_id("MENUITEM_SHIPPINGESTIMATES_MPAGE").click()
        time.sleep(1)

if __name__ == "__main__":
    unittest.main()
