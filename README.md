maintenance
===========

### 维护模块
在初始化模块的setup方法中判断维护模块是否开启，开启则跳转到maintain，maintain用来显示维护页面信息

### 配置文件范例

* maintenance.yml

	```
	---
	#default:
	#  status: 维护模块状态 on开启 off关闭
	#  maintan_end_date: 维护到期时间
	default:
	  status: off
	  maintain_end_date: 2015.7.22 12:00
	...
	```
