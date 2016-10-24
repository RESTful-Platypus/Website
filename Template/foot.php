
				</div>
				<div class="col-sm-3">
<?php echo $this->partial('nav'); ?>
				</div>
			</div>
		</div>

		<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.6.0/highlight.min.js"></script>
<?php foreach($this->getScripts() as $script): ?>
		<script src="<?php echo $script; ?>"></script>
<?php endforeach; ?>
		<script>hljs.initHighlightingOnLoad();</script>
	</body>
</html>
