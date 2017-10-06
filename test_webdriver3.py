# -*- coding: utf-8 -*-
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import Select
from selenium.common.exceptions import NoSuchElementException
import unittest, time, datetime, xlrd, re

email = "aokiri@capa.co.jp"
password = "aoki"
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
        time.sleep(1)
        password_in.send_keys(password)
        time.sleep(1)
        driver.save_screenshot("screenshot6.png")
        #ログインする
        driver.find_element_by_name("BTNENTER").click()
        time.sleep(1)

#iblで商品選択
#    def item_choose(self):
        #商品を選ぶ
        driver.find_element_by_id(itemid).click()
        time.sleep(1)
        #数量を入力する
        driver.find_element_by_id("vQUANTITY_0001").send_keys(quantity)
        time.sleep(1)
        #カートへ追加ボタン
        driver.find_element_by_name("BTNORDER").click()
        time.sleep(1)
        #注文を確定
        driver.find_element_by_name("BTNORDERKAKUTEI").click()
        time.sleep(1)

        #希望納期
        driver.find_element_by_id("ORDERDESIREDDELIVERYDATE").send_keys(request_date)
        time.sleep(1)
        #発送方法
        if s_method == "MSE":
            driver.find_element_by_id("ORDERSHIPPINGMETHOD1").click()
        elif s_method == "FedEx":
            driver.find_element_by_id("ORDERSHIPPINGMETHOD2").click()
            fedex_act = str(int(sheet_1.cell(1,4).value))
            driver.find_element_by_id("FEDEXACCOUNTNAME").send_keys(fedex_act)
        time.sleep(1)
        #用途
        purpose_select_element = Select(driver.find_element_by_id("ORDERUSE"))
        if purpose == "MotorShowSales":
            purpose_select_element.select_by_value("1")
        elif purpose == "MoterShowDisplay":
            purpose_select_element.select_by_value("2")
        elif purpose == "PopUpSales":
            purpose_select_element.select_by_value("3")
        elif purpose == "PopUpDisplay":
            purpose_select_element.select_by_value("4")
        elif purpose == "EventGiveaway":
            purpose_select_element.select_by_value("5")
        elif purpose == "Gift":
            purpose_select_element.select_by_value("6")
        elif purpose == "IblSales":
            purpose_select_element.select_by_value("7")
        time.sleep(2)
        #アイテムカード有無
        if itemcard == "×":
            driver.find_element_by_id("ORDERITEMCARDSTORYTELLING1").click()
        elif s_method == "○":
            driver.find_element_by_id("ORDERITEMCARDSTORYTELLING12").click()
        time.sleep(2)
        #注意事項の同意
        driver.find_element_by_id("ORDERMATTERSAGREEMENT").click()
        time.sleep(2)
        #注文リクエスト
        driver.find_element_by_name("BTNTRN_ENTER").click()
        time.sleep(3)
        #ログアウト
        driver.find_element_by_id("ACTIONLOGOUT_MPAGE").click()
        time.sleep(3)



#    def tearDown(self):
#        self.driver.quit()

if __name__ == "__main__":
    unittest.main()
