<?php
if(file_exists("install.lock")){
echo "<div style='padding:30px;'>安装向导已运行安装过，如需重安装，请删除 /install/install.lock 文件</div>";
}else{
?>
<div class="body"> 
    <div class="licence"> 
      <div style='text-align:center;font-size:14px;font-weight:bold'>授权协议</div>
      版权所有(c)2006-2018，郑州市创美时信息技术有限公司保留所有权利。 
      <p>感谢您选择 caicaicms网站管理系统。</p>
      
    <p>郑州市创美时信息技术有限公司为caicaicms产品的开发商，依法独立拥有caicaicms产品著作权。公司网址为：<a href="http://www.caicaicms.net">http://www.caicaicms.net</a>。</p>
    <p>caicaicms著作权已在中华人民共和国国家版权局注册，著作权受到法律和国际公约保护。使用者：无论个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，在理解、同意、并遵守本协议的全部条款后，方可开始使用caicaicms软件。
    </p>
      <p>一 协议许可的权利 </p>
      <ol>
        <li>企业用户（泛指非自然人的团体，如企业、协会、政府部门等）必须购买软件授权后方可正式建站使用，个人用户可根据自己的实际情况选择是否购买授权及必要的技术支持。 
        </li>
      
      <li>您可以在协议规定的约束和限制范围内修改caicaicms源代码或界面风格以适应您的网站要求。</li>
      <li>您拥有使用本软件构建的网站中全部会员资料及相关信息的所有权，并独立承担其内容的相关法律义务。</li>
      <li>获得商业授权之后，您可以依据所购买的授权类型中确定的技术支持期限、技术支持方式和技术支持内容，自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。</li>
      </ol>
	  <p>二 协议规定的约束和限制 </p>
	  <ol>
      <li> 未获商业授权之前，企业用户不得将本软件用于正式建站。购买商业授权请登录 <a href="http://www.caicaicms.net">http://www.caicaicms.net</a>
        参考相关说明。 </li>
       <li>不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。 </li>
       
      <li>无论如何，即无论用途如何、是否经过修改或美化、修改程度如何，只要使用caicaicms的整体或任何部分，未经书面许可，网站页面页脚处的caicaicms名称和<a href="http://www.caicaicms.net">http://www.caicaicms.net</a>的链接都必须保留，而不能清除或修改，除非您获得郑州市创美时信息技术有限公司授权许可。
      </li>
        <li> 禁止在caicaicms的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。 </li>
        <li>如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。 </li>
      </ol>
	  <p>三 有限担保和免责声明 </p>
	  <ol>
      <li>本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。 </li>
       <li> 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品授权和技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。 
        </li>
       <li> 郑州市创美时信息技术有限公司不对使用本软件构建的网站中的信息承担责任。</p>
      <li>有关caicaicms最终用户授权协议、商业授权与技术服务的详细内容，均由caicaicms官方网站独家提供。郑州市创美时信息技术有限公司拥有在不事先通知的情况下，修改授权协议和服务价目表的权力，修改后的协议或价目表对自改变之日起的新授权用户生效。
      </li>
      <li>电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始安装caicaicms，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</li>
      <li>郑州市创美时信息技术有限公司拥有对本授权协议的最终解释权。 </li>
   </ol>
    </div>
    <form action="index.php" method="post" id="myform">
      <input type="hidden" name="step" value="2"/>
      <input type="submit" value="我同意" id="read" />
      &nbsp;&nbsp; 
      <input type="button" value="不同意"  onclick="if(confirm('您确定要退出安装向导吗？')) window.close();"/>
    </form>
  </div>
<?php
}
?>