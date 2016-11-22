{% extends 'common:page/layout.tpl' %}

{% block content %}
	<!-- {% widget "common:widget/message/message.tpl"%} -->
     <div id="pages-container">
        <!-- {% widget "index:widget/listdata/listdata.tpl" mode="quicking" id="listdastawidget" %} -->
        {% widget "index:widget/listdata/listdata.tpl" %}
        {% widget "index:widget/adddata/adddata.tpl" %}
     </div>
     
{% endblock %}