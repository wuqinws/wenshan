# Like_Girl V5.1.0


- 演示地址：[演示](https://lovey.kikiw.cn)
- 项目文档地址：[查看文档](https://blog.kikiw.cn/index.php/archives/52/)
  ![首页](https://img.gejiba.com/images/15eee53f2c5653ffaf9612ad37202252.png)
  ![后台](https://img.gejiba.com/images/fab78111e4f2d3ce9b240df39cf78e04.png)

### 前言

* 本项目完全免费 有能力的朋友可以进行二次开发
* 禁止以任何方式出售 一切后果自行负责 违背项目初衷作者必定追究
* 开发本项目的初衷在于深入学习和广泛交流 以此丰富我们的知识库 提升自我修养
* 倘若在此过程中 能够为您的伴侣带去一丝欢乐与愉悦 那无疑是对我开发的额外肯定 也是一件值得欣慰的事情


#### 项目声明


- 本次更新我需要先澄清最近热度较高的事件《Love-Yi》情侣小站存在Sql注入漏洞
- 这里的《Love-Yi》亦即是LikeGirl情侣小站 至于为何被称为《Love-Yi》是因为Demo站点的标题从一开始发布就是这个
- 言归正传 至于我是怎么看到的这个公众号文章内容 某天我的用户在交流群内转发了这篇文章 但是我看到那一刻确实是有点心凉了
- 但毕竟程序是我开发的 我一眼看到图片中的点点滴滴样式还有注入点就知道不是5.0版本了
- 为何我敢这么肯定 因为在5.0的点点滴滴id已经坐了处理 根本不会报出数据库错误 看到这里我也是觉得无语 如果之前的版本没有漏洞我为何要一直更新 但是也无所谓 开心就好了
- 因为情侣小站5.0版本我确实花了很多时间去更新 奈何当时的技术有上限 无法将他更新到非常的完美 只能保证能正常运行使用 不报错误
- 但是我也从来都不敢承诺本程序绝对安全 Bug数量为0 我还是相信没有绝对安全的系统 这部电影当时也看了哈哈
- 扯了这么多 我这里说一点 其实情侣小站5.0版本确实存在较多的Bug 无论是安全问题 还是页面的Ui
- 其实我还是不知道有多少的用户在使用 但是我的博客文档 已经有1000+的评论了 我不清楚是否有重复下载的 码云的数据压缩包下载量为1700+
- 当我看到这个数据的时候 我不忍心就这样浪费了这个项目 我还是想捡起来再维护维护 留着一个较完美的"结局"
- 我这里需要感谢一下这么多喜欢LikeGirl程序的用户 也感谢大家的赞助与支持 我只是一个完全兴趣爱好的开发者 并不是什么大佬 尽我所能去更新
- 最后感谢提交LikeGirl程序漏洞报告的用户 当时添加了我的微信将一个文档的报告给我发送过来 我又担心又感动的 因为程序可能有很多人是在使用的 万一真被不法分子入侵 隐私内容泄露这是不可逆的
- 就因为这样 而且我个人觉得5.0版本还可以继续优化 只是我已经开发了 Pro版本是收费的 我又没有精力去维护这个5.0版本了 只想空闲时间投入到Pro版本开发 不想将时间花在开源版本里 因为开源的项目到最后能坚持下来的项目真是太少了

##   江湖路漫漫 我们有缘再见 （2024/06/14）



## LikeGirl 5.1.0

- 调整前端点点滴滴页面内容标签样式
- 调整前端留言祝福页面留言卡片、留言信息输入框样式
- 调整前端恋爱事件PC端卡片显示宽度
- 调整后台首页数据统计图标
- 更换前端页面元素动画效果 （淡入）
- 增强前端留言祝福表单校验
- 优化前端留言祝福页面加载较慢问题
- 优化前端提醒弹窗样式
- 优化前端侧边栏滑动条样式
- 优化前端Love Photo（恋爱相册）卡片样式
- 优化后台部分页面显示样式
- 修复后台部分页面存在Sql注入问题
- 修复后台部分页面存在鉴权问题
- 修复留言祝福留言内容字数限制问题
- 修复前端多处存在文本内容溢出问题
- 新增恋爱事件标题支持Emoji（表情）


------------


#### LikeGirl 5.0.0

* 写在前面 修改版权的我建议你别用 不尊重别人的成果非常可耻
* 新增前端全站pjax无限加载技术
* 新增前后端Ajax数据异步请求技术
* 新增前端头部头像背景高斯模糊开关
* 新增前端Pjax无限加载开关
* 新增修改敏感信息需输入安全码操作
* 新增自定义前端全局CSS样式
* 新增自定义前端头部全局内容（可添加css外链或其他内容）
* 新增自定义前端底部全局内容（可添加js外链或其他内容）
* 优化后端留言页内容/数量显示过长问题
* 优化后端数据编码 进行html字符转义
* 优化部分页面数据库预处理内容
* 优化前端部分页面加载动画效果
* 优化提醒弹窗 使用开源插件 美观主要
* 优化前端留言板部分CSS样式 数据获取判断
* 修复在数据库内容虚拟主机/空间中文内容显示“???”
* 修复后台管理登录页对密码判断特殊字符问题
* 修复网站备案号点击无法跳转工信部官网
* 再次声明 我写这个项目只是练练手完全没有考虑过挣一分钱 禁止以任何方式出售 一切后果自行负责


------------

#### 使用说明

- 文章书写需了解HTML标签基本语法
- 可以百度查询资料学习
- 部署后会有一篇默认文章 可以参考书写格式

#### 食用方法
1.打开根目录下的`admin`文件夹
2.接着找到`Config_DB.php`文件 打开后按注释提示更改为你的数据库相关信息
3.请认真填写安全码 尽量设置的`复杂难以猜测` 修改密码等敏感信息需输入安全码
4.最后到数据库导入sql文件（`love20240612.sql`）
5.默认账号密码：`admin`/`lovezz`


#### 留言反馈

- 风雨同舟数十载 相濡以沫共白头
- 珍惜眼前人 欢迎使用Like_Girl V5.1.0（最终版）
- 使用过程中如遇到bug或建议请反馈到邮箱 如超过2小时未回复可添加QQ好友进行咨询反馈
- mail@kikiw.cn
#### 如当前项目对你有所帮助 可扫码赞助
![收款码](https://img.gejiba.com/images/b5e058f6f3c2ce6bd9d3ab4205aa0bac.png) 

