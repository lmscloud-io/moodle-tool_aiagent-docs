<?php
// phpcs:disable moodle.Files.BoilerplateComment
//
// This file is part of the tool_aiagent plugin for Moodle.
//
// This software is proprietary and is licensed, not sold. Use, copying,
// modification and distribution are governed by the LMSCloud Commercial
// License; see the LICENSE file in the plugin root for the full terms.
// Unauthorised redistribution or resale is prohibited.

/**
 * Japanese language pack for AI agent.
 * Last updated: 2026-08-03
 *
 * @package    tool_aiagent
 * @category   string
 * @copyright  LMSCloud Limited <info@lmscloud.io>
 * @author     Marina Glancy
 * @license    https://lmscloud.io/products/ai-agent/license LMSCloud Commercial License
 */

defined('MOODLE_INTERNAL') || die();

$string['addon'] = 'アドオン';
$string['aiagent:autoapproveall'] = '確認なしですべての関数呼び出しを実行する自動承認モード「すべて」を選択する';
$string['aiagent:usechat'] = 'AIエージェントとのチャットを開始する (チャットを開始できる場所を制御します。開始後のチャットがアクセスできるデータは制限しません)';
$string['allowfeedback'] = 'フィードバックを許可する';
$string['allowfeedback_desc'] = '有効にした場合、ユーザはアシスタントの応答を評価したり、失敗した関数呼び出しを報告したりできます。送信された内容はAIエージェントプラグインの開発者に送られます (LLMには送られません)。開発者はこれをMoodle関数の呼び出し動作の改善に利用します。送信されるのは評価された一連のやりとりのみでチャット全体ではなく、ユーザは送信前にテキストを編集できます。外部への通信ポリシーが厳格なサイトではこの設定を無効にしてください。';
$string['anthropic_heading'] = 'Anthropic (Claude)';
$string['anthropic_web_fetch'] = '「web fetch」ツールを有効にする';
$string['anthropic_web_fetch_desc'] = 'Anthropicのweb_fetchツールを使用して、Claudeがサーバ側で外部URLを取得できるようにします。モデルに読ませたい公開ウェブページがチャットで言及される場合に便利です。このMoodleサイト上のファイルはread_file関数で別途処理されるため (必要に応じてAnthropicのFiles APIにアップロードされます)、web_fetchを無効にしてもコースリソースや添付ファイルへのアクセスには影響しません。';
$string['attachedfiles'] = '添付ファイル';
$string['attachfile'] = 'ファイルを添付';
$string['autoapprove'] = '自動承認';
$string['autoapprove_all'] = 'すべて (注意して使用してください)';
$string['autoapprove_all_desc'] = 'すべての確認をスキップする';
$string['autoapprove_all_disabled'] = 'あなたにはこのモードを使用する権限がありません。';
$string['autoapprove_all_short'] = 'すべて';
$string['autoapprove_header'] = '関数呼び出しの自動承認';
$string['autoapprove_none'] = 'なし';
$string['autoapprove_none_desc'] = 'すべての関数呼び出しの前に確認する';
$string['autoapprove_readonly'] = '読み取りのみ';
$string['autoapprove_readonly_desc'] = '読み取りは自動承認し、書き込みは確認する';
$string['autoapprove_safe'] = '安全';
$string['autoapprove_safe_desc'] = 'サイトを変更しない操作を自動承認する';
$string['autoapprove_safe_examples'] = '読み取りに加えて、添付ファイルのサイズ変更、画像生成、LLMへのファイル送信等';
$string['backtoconfiguration'] = 'AIエージェント構成に戻る';
$string['builtinfunction'] = '同梱';
$string['bulk_disabled'] = '関数 {$a} 個を無効にしました';
$string['bulk_disableselected'] = '選択したものを無効にする';
$string['bulk_enabled'] = '関数 {$a} 個を有効にしました';
$string['bulk_enableselected'] = '選択したものを有効にする';
$string['bulk_withselected'] = '選択した関数に対して';
$string['capabilities'] = 'ケイパビリティ';
$string['chat_namelink'] = '名称 (リンク付き)';
$string['chatfrozen'] = 'このチャットのスキルは利用できなくなったため、チャットを続けることはできません。代わりに新しいチャットを開始してください。';
$string['chathelpcontent'] = '<p>AIエージェントはあなたに代わってこのサイトのコンテンツを読み取り、変更できます。ほとんどの操作は実行前にあなたの承認を求めます。入力欄で自動承認モードを切り替えて、これを緩めたり厳しくしたりできます。</p>
<p>ファイルはドラッグアンドドロップ、貼り付け、またはクリップアイコンのクリックで添付できます。次にリクエストを入力して<strong>送信</strong>を押してください。Enterキーで送信、ShiftキーとEnterキーで改行します。</p><p>AIは間違えることがあります。結果を確認してください。</p>';
$string['chatnopermission'] = 'このチャットは、あなたがAIエージェントを利用できなくなったサイト内のエリアで開始されたため、続けることはできません。';
$string['chatnostartpermission'] = 'あなたにはここでチャットを開始する権限がありません。AIエージェントが提供されているページから開いてください。';
$string['chatretention'] = 'チャットの保存期間';
$string['chatretention_desc'] = 'この期間アクティビティのないチャットは、ユーザのチャット履歴から削除され、添付ファイルはこのサイトから削除されます。また、AIプロバイダに保存されているチャットデータ (保存されたレスポンスおよびアップロードされたファイル) の削除がリクエストされます。プロバイダ側での削除はベストエフォートであり、保証されません。プロバイダのアカウントでも同様のデータ保存ポリシーを設定してください。メッセージおよび使用量の記録は、下の「チャットログの保存期間」が経過するまでレポート用に保持されます。0に設定した場合、チャットは永久に保持されます。';
$string['closeconfirm_body'] = 'ウィンドウを閉じてもチャットは削除されません。「以前のチャット」メニューからいつでも再度開けます。チャットは {$a} 日後に自動的に削除されます。';
$string['closeconfirm_body_noretention'] = 'ウィンドウを閉じてもチャットは削除されません。「以前のチャット」メニューからいつでも再度開けます。';
$string['closeconfirm_close'] = 'チャットを閉じる';
$string['closeconfirm_dontshowagain'] = '今後表示しない';
$string['closeconfirm_title'] = 'このチャットを閉じますか?';
$string['component'] = 'コンポーネント';
$string['component_filesandimages'] = 'ファイルおよび画像の操作';
$string['configuration'] = 'AIエージェント構成';
$string['confirmdeleteskill'] = 'このスキルを削除してもよろしいですか?';
$string['contextevent_opened'] = '{$a} から開かれました';
$string['contextevent_page'] = 'ページ · {$a}';
$string['copyresponse'] = '応答をコピー';
$string['copyurl'] = 'URLをコピー';
$string['datasource_chats'] = 'AIエージェントチャット';
$string['datasource_usage'] = 'AIエージェント使用量';
$string['deletechat_menu'] = 'チャットを削除';
$string['deletechat_named'] = 'チャットを削除: {$a}';
$string['disablefunction'] = 'この関数を無効にする';
$string['dragtoresize'] = 'ドラッグしてサイズ変更';
$string['dynamicdiscovery'] = '動的関数検出';
$string['dynamicdiscovery_automatic'] = '自動';
$string['dynamicdiscovery_desc'] = '必要な場合のみ関数を検出することでトークン使用量を最適化します。多数のウェブサービス関数を有効にしている場合に推奨されます。自動モードでは、利用可能な関数が {$a} 個を超える場合にオンになります。一部のAIプロバイダには関数の数に制限があります (例えばOpenAIの上限は128です)。';
$string['dynamicdiscovery_off'] = 'オフ';
$string['dynamicdiscovery_on'] = 'オン';
$string['enabled'] = '有効';
$string['enablefunction'] = 'この関数を有効にする';
$string['entity_aiagentfunction'] = 'AIエージェント関数';
$string['entity_chat'] = 'チャット';
$string['entity_externalfunction'] = 'ウェブサービス関数';
$string['entity_message'] = 'メッセージ';
$string['entity_placement'] = '配置';
$string['entity_skill'] = 'スキル';
$string['entity_usage'] = 'トークン使用量';
$string['error_interrupted_function'] = '関数呼び出しが完了する前に中断されました。変更が部分的に適用されている可能性があります。再試行する前に状態を確認してください。';
$string['error_interrupted_llm'] = 'AIプロバイダとの通信が中断されました。「再試行」をクリックしてリクエストをやり直してください。';
$string['errordetail'] = '{$a}';
$string['erroremptymessage'] = 'メッセージを空にすることはできません。';
$string['errorfullscreendisabled'] = 'フルスクリーンのチャットビューはこのサイトで有効にされていません。';
$string['errorinvalidchat'] = 'チャットが見つからないか、アクセスが拒否されました。';
$string['errorinvalidname'] = '名称を空にすることはできません。';
$string['errormissingfeedbackparams'] = 'メッセージまたはフィードバックタイプがありません。';
$string['errornopendingfunction'] = '保留中の関数呼び出しはありません。';
$string['errornoprovider'] = '利用可能なAIプロバイダがありません。AIエージェントはアクション「テキストを生成する」の設定を使用するため、サイト管理で少なくとも1つのAIプロバイダに対してこのアクションが設定および有効にされていることを確認してください。';
$string['errornoprovider_link'] = 'AIプロバイダを設定する。';
$string['errornoretryresponse'] = '再試行できる失敗した応答はありません。';
$string['errorpendingfunctions'] = 'まず保留中の関数呼び出しを承認または拒否してください。';
$string['errorprovider_blocked_prompt'] = '{$a->provider} がプロンプトをブロックしました: {$a->reason}';
$string['errorprovider_blocked_response'] = '{$a->provider} が応答をブロックしました: {$a->reason}';
$string['errorprovider_no_content'] = '{$a} はコンテンツを返しませんでした。';
$string['errorprovider_no_content_with_reason'] = '{$a->provider} はコンテンツを返しませんでした (終了理由: {$a->reason})。';
$string['errorresponses_endpoint_invalid'] = 'AIプロバイダと通信するためのエンドポイントが有効でないか、到達できません。';
$string['errorresponses_endpoint_invalid_config'] = 'プラグインはOpenAI Responses APIのエンドポイントとして {$a->endpoint} を使用しようとしましたが、リクエストは失敗しました。{$a->settingslink} を開いてResponses APIのエンドポイントを確認するか、APIタイプをChat Completionsに切り替えてください。';
$string['errorresponses_endpoint_reply'] = 'プロバイダの応答: {$a}';
$string['errorresponses_provider_switch'] = 'このチャットは別のAIプロバイダで開始されたため、OpenAIのResponses APIでは続けることができません。新しいチャットを開始するか、元のプロバイダ (またはOpenAI Chat Completions) に戻して続けてください。';
$string['errorrootnotfound'] = 'このチャットのルートメッセージが見つかりません。';
$string['exportskill'] = 'エクスポート';
$string['feedback_modal_freetextlabel'] = 'その他にありますか? (任意)';
$string['feedback_modal_freetextplaceholder_negative'] = '何が問題でしたか? 詳しく書いていただいて構いません。';
$string['feedback_modal_freetextplaceholder_positive'] = 'うまくいった点は何ですか? (任意)';
$string['feedback_modal_freetextplaceholder_toolerror'] = 'この関数呼び出しの何が問題でしたか?';
$string['feedback_modal_intro_negative'] = 'お知らせいただきありがとうございます。あなたのフィードバックはAIエージェントプラグインの開発者に送信されます (AIプロバイダには送信されません)。開発者はこれをMoodle関数の呼び出し動作の改善に利用します。';
$string['feedback_modal_intro_positive'] = 'ありがとうございます! あなたのフィードバックはAIエージェントプラグインの開発者に送信されます (AIプロバイダには送信されません)。開発者はうまくいっている点を維持し、そうでない点を改善するために利用します。';
$string['feedback_modal_intro_toolerror'] = 'この関数呼び出しを問題ありとして報告します。あなたのフィードバックはAIエージェントプラグインの開発者に送信されます (AIプロバイダには送信されません)。開発者は元になるウェブサービスを修正したり、AIによる使い方を改善したりするために利用します。';
$string['feedback_modal_send'] = 'フィードバックを送信';
$string['feedback_modal_sending'] = '送信中...';
$string['feedback_modal_snapshotlabel'] = '送信される内容 (編集できます)';
$string['feedback_modal_title_positive'] = 'うまくいった点をお知らせください';
$string['feedbackcat_negative_misunderstood'] = '質問を誤解した';
$string['feedbackcat_negative_notfollowed'] = '指示に従わなかった';
$string['feedbackcat_negative_other'] = 'その他';
$string['feedbackcat_negative_wronginfo'] = '誤ったまたは作り話の情報';
$string['feedbackcat_negative_wrongtoolused'] = '間違った関数を使用した';
$string['feedbackcat_positive_accurate'] = '正確';
$string['feedbackcat_positive_goodexplanation'] = 'わかりやすい説明';
$string['feedbackcat_positive_helpful'] = '役に立った';
$string['feedbackcat_positive_other'] = 'その他';
$string['feedbackcat_positive_welltimed'] = '目的に合った関数';
$string['feedbackcat_toolerror_misleadingresult'] = '結果が誤解を招くものだった';
$string['feedbackcat_toolerror_other'] = 'その他';
$string['feedbackcat_toolerror_toolerror'] = '関数がエラーを返した';
$string['feedbackcat_toolerror_wrongargs'] = '引数が間違っていた';
$string['feedbackcat_toolerror_wrongtool'] = '目的に合わない関数';
$string['feedbackdisabled'] = 'フィードバックの収集はサイト管理者によって無効にされています。';
$string['feedbackfailed'] = 'フィードバックを送信できませんでした。後でもう一度お試しください。';
$string['feedbackflagfunctioncall'] = 'この関数呼び出しを報告';
$string['feedbacksubmitted'] = 'フィードバック送信済み';
$string['feedbackthanks'] = 'フィードバックをありがとうございます!';
$string['feedbackthumbdown'] = 'この応答の問題を報告';
$string['feedbackthumbup'] = 'この応答は役に立ちました';
$string['feedbackvalidation_categoryrequired'] = '少なくとも1つのカテゴリを選択してください。';
$string['functionapprovecount'] = '呼び出し {$a} 件を承認';
$string['functioncall_actions'] = '関数呼び出しの承認または拒否';
$string['functioncall_chip_action'] = '自動承認モードを変更';
$string['functioncalldetails'] = '関数呼び出しの詳細';
$string['functiondeny'] = '拒否';
$string['functiondenyall'] = 'すべて拒否';
$string['functionloopguardbody'] = 'この関数は同じ入力ですでに {$a} 回実行されています。ループの可能性があるため自動承認を一時停止しました。続けるには承認してください。';
$string['functionloopguardheading'] = '繰り返しの呼び出しです。';
$string['functionname'] = '関数名';
$string['functionparameters'] = 'パラメータ';
$string['functionresult'] = '結果';
$string['functionresultdiscarded'] = '結果が大きすぎたため ({$a})、破棄されました。絞り込み条件を付ける、取得するフィールドを減らす、より限定的な関数を使用するなどして、リクエストを絞り込んでください。同じ呼び出しを繰り返しても同じエラーになります。';
$string['functions_intro'] = '<p><b>すべてのウェブサービス関数がAIエージェントに適しているわけではありません。</b>クライアント・サーバ間の通信用に作られたもの (AJAXと表示) や、未認証ユーザ用のもの (未認証) があり、より良い代替がある関数もあります。一部のAJAX関数はAIエージェントでも十分に機能しますが、ほとんどは機能しません。AIエージェントプラグインはコアおよび標準の関数に関連度スコア (1-10) を割り当て、5以上のものを有効にします。アドオンプラグインの関数はスコア付けされず、代わりにAJAX以外のすべての関数が自動的に有効にされます。このページで利用可能な関数を確認し、個別に有効または無効にしてください。</p><p>関数が1つ以上のケイパビリティを必要とする場合、サイト内のいずれのコンテキストでもそれらのケイパビリティを1つも持たないユーザは、その関数を利用できません。コアおよび標準プラグインについては、AIエージェントプラグインがこれらのケイパビリティを正しく設定します。アドオンプラグインについてはケイパビリティが関数定義から取得され、Moodle自身はこのチェックを強制しないため、誤っている可能性があります。</p>';
$string['functions_report'] = 'AIエージェント関数';
$string['functionstatus_denied'] = '拒否済み';
$string['functionstatus_failed'] = '失敗';
$string['functionstatus_pending'] = '承認待ち';
$string['functionstatus_processing'] = '実行中...';
$string['functiontype'] = 'タイプ';
$string['functiontype_help'] = 'ウェブサービス関数のタイプおよびその特性です:

* **読み取り**: 何も変更せずにデータを取得します
* **書き込み**: データを作成または変更します
* **AJAX**: クライアント・サーバ間のリクエストのためにMoodleが内部的に使用します。AIエージェントの関数としては適さない可能性が高くなります
* **未認証**: 未認証ユーザが利用できます。これもAIエージェントの関数としては適さない可能性が高くなります';
$string['functiontype_read'] = '読み取り';
$string['functiontype_write'] = '書き込み';
$string['gemini_api_generatecontent'] = 'generateContent (安定版)';
$string['gemini_api_interactions'] = 'Interactions API (ベータ)';
$string['gemini_api_type'] = 'APIタイプ';
$string['gemini_api_type_desc'] = 'マルチターンチャットに使用するGemini APIです。generateContentは標準的なステートレスのエンドポイントで、ターンごとにメッセージ配列全体を再構築します。Interactions APIは現在ベータ版で、会話の状態をGoogle側に保存しますが (そのためターンごとに新しい入力のみが送信されます)、スキーマが予告なく変更される可能性があります。';
$string['gemini_builtin_code_execution'] = '「Code Execution」ツールを有効にする';
$string['gemini_builtin_code_execution_desc'] = 'Geminiがサンドボックス内でPythonコードを記述および実行し、数学の問題を解いたりデータを処理したりできるようにします。Gemini 3以降のモデルのみ対応しています。Gemini 2.5以前では組み込みツールとカスタム関数呼び出しを併用できないため、この設定は通知なく無視されます。';
$string['gemini_builtin_google_search'] = 'Google検索によるグラウンディングを有効にする';
$string['gemini_builtin_google_search_desc'] = 'Geminiが最新のウェブ検索結果に基づいて応答を生成できるようにします。Gemini 3以降のモデルのみ対応しています。Gemini 2.5以前では組み込みツールとカスタム関数呼び出しを併用できないため、この設定は通知なく無視されます。検索クエリごとに個別に課金されます。';
$string['gemini_builtin_url_context'] = '「URL Context」ツールを有効にする';
$string['gemini_builtin_url_context_desc'] = 'Geminiがユーザの言及した公開URLのコンテンツを読み取り、分析できるようにします。Gemini 3以降のモデルのみ対応しています。Gemini 2.5以前では組み込みツールとカスタム関数呼び出しを併用できないため、この設定は通知なく無視されます。URLは公開されている必要があります (localhostは不可、認証も不可)。';
$string['gemini_heading'] = 'Google Gemini';
$string['hint_splitview'] = 'このチャットをあなたのサイトと並べて使用しますか? <a href="{$a}">{$a}</a> を新しいウィンドウにドラッグするか、右クリックしてブラウザの分割ビューをご利用ください。';
$string['imagedimensions'] = '{$a->width}×{$a->height} px';
$string['imagepreviewinfo'] = 'ファイル {$a->size}、大きさ {$a->dimensions}。プレビュー {$a->preview} ({$a->scale}%)。';
$string['importskill'] = 'スキルをインポート';
$string['importskill_addmore'] = 'さらに追加...';
$string['importskill_button'] = 'スキル {$a} 個をインポート';
$string['importskill_buttonone'] = 'スキル 1 個をインポート';
$string['importskill_choose'] = 'ファイルを選択...';
$string['importskill_drophint'] = 'スキルファイルをここにドラッグするか、ボタンをご利用ください。';
$string['importskill_fileone'] = 'ファイル 1 個を選択済み';
$string['importskill_files'] = 'ファイル {$a} 個を選択済み';
$string['importskill_statusinvalid'] = 'スキルファイルではありません';
$string['importskill_statusnew'] = '新しいスキル';
$string['importskill_statusupdate'] = '{$a} を更新';
$string['importskill_summarynew'] = '新規 {$a} 個';
$string['importskill_summaryskipped'] = 'スキップ {$a} 個';
$string['importskill_summaryupdate'] = '更新 {$a} 個';
$string['importskill_toolarge'] = 'スキルデータが大きすぎます (最大 {$a})。';
$string['inlinefilecharlimit'] = 'インラインファイルコンテンツの上限';
$string['inlinefilecharlimit_desc'] = 'ファイルをインラインで読み取る際に、チャットへ直接埋め込めるテキストファイルの最大量です。これを超えるコンテンツは切り詰められます。インライン配信は、モデルがリクエストした場合、およびファイルを受け付けられないAIプロバイダのフォールバックとして使用されます。埋め込まれたコンテンツはターンごとにチャット履歴とともに再送信されるため、上限を大きくするとトークン使用量が増加します。';
$string['invalidparameter'] = '無効なパラメータが検出されました: {$a}';
$string['isajax'] = 'AJAX';
$string['licenseactivate'] = 'ライセンスを有効化';
$string['licenseactivate_help'] = 'LMSCloudからメールで受け取ったライセンスキーを入力してください。ライセンスキーは限られた数のサイト (通常は2サイト) で有効化できます。別のサイトで使用するため、いつでも無効化できます。';
$string['licensedeactivate'] = '無効化';
$string['licensedeactivate_help'] = 'このサイトでライセンスキーを無効化し、別のサイトで使用できるようにします。';
$string['licenseerror_deactivate'] = 'ライセンスを無効化できませんでした。サーバが一時的に利用できない可能性があります。後でもう一度お試しください。';
$string['licenseerror_deactivate_forced'] = 'このライセンスはサーバ設定 (config.php) で指定されているため、このページから無効化することはできません。';
$string['licenseerror_invalid'] = 'ライセンスキーが無効であるか、有効化できませんでした。';
$string['licenseerror_limit'] = 'このライセンスキーには空きスロットがありません。先に別のサイトを無効化してから、もう一度お試しください。';
$string['licenseerror_transport'] = 'ライセンスサーバに到達できませんでした。接続を確認してもう一度お試しください。';
$string['licensekey'] = 'ライセンスキー';
$string['licenselocked_expired'] = 'このサイトは14日以上ライセンスを検証していません。アクセスを回復するにはライセンスを再確認してください。';
$string['licenselocked_key_rejected'] = 'このライセンスキーはこのサイトでは無効になりました。';
$string['licenselocked_url_mismatch'] = 'このサイトのウェブアドレスが変更されました。ライセンス所有者による承認が必要です。';
$string['licensemanageinsettings'] = 'ライセンスはAIエージェント設定で管理します。';
$string['licenserecheck'] = '再確認';
$string['licensesetting'] = 'AIエージェントライセンス';
$string['licensesetting_desc'] = 'このサイトのAIエージェントライセンスを有効化、再確認または無効化します。';
$string['licensestatus_materialsmissing'] = 'AIエージェントライセンスは有効ですが、ダウンロードされた素材が見つからないため、利用できる関数がありません。再確認して素材を取得し直してください。';
$string['licensestatus_notactivated'] = 'このサイトでAIエージェントを使用するにはライセンスが必要です。';
$string['licensestatus_valid'] = 'AIエージェントライセンスは有効です。';
$string['loginrequired'] = 'ログイン必須';
$string['logretention'] = 'チャットログの保存期間';
$string['logretention_desc'] = 'この期間アクティビティのないチャットのメッセージおよびトークン使用量の記録が、データベースから完全に削除されます。これは、ユーザまたは上の設定によってすでにチャット履歴から削除されたチャットにのみ適用されます。0に設定した場合、ログは永久に保持されます。';
$string['maxfilesize'] = 'LLMに送信するファイルの最大サイズ';
$string['maxfilesize_desc'] = '大きすぎるファイルをユーザがLLMに送信できないようにします。大きなファイルはトークンを急速に消費し、コストを押し上げます。このサイズを超えるファイルは、データがサイトから送出される前にエラーとして拒否されます。

AIプロバイダはいずれにせよ、リクエストごとの独自の上限を超えるファイルを拒否します (Anthropic 32 MB、Gemini インライン 50 MB、OpenAI 512 MB)。';
$string['maxfunctionresultsize'] = '関数の結果の最大サイズ';
$string['maxfunctionresultsize_desc'] = '1つの関数がAIモデルに返せるデータの最大量です。Moodleの関数の中にはフィルタを持たず、サイトのすべてのユーザまたはすべてのコースを返すものがあり、モデルを圧迫して以降のターンごとにトークンを消費します。この上限を超えた結果は破棄され、モデルにはリクエストを絞り込むよう伝えられます。ゼロを指定すると無制限になります。ファイルのインライン読み取りは対象外です。それには「インラインファイルコンテンツの上限」を使用してください。';
$string['newchat'] = '新しいチャット';
$string['newchatchooser_blank_sub'] = 'コンテキストなし。一般的なアシスタントです。';
$string['newchatchooser_clone'] = 'このチャットと同じ';
$string['newchatchooser_continue'] = '続きから';
$string['newchatchooser_desc_default'] = 'このページで新しいチャットを開始するか、続きから始めてください。';
$string['newchatchooser_desc_full'] = '一般的なチャットを開始するか、続きから始めてください。';
$string['newchatchooser_desc_multi'] = 'このページにはいくつかの開始点があります。1つを選ぶか、続きから始めてください。';
$string['newchatchooser_error'] = '新しいチャットを開始できませんでした。もう一度お試しください。';
$string['newchatchooser_none'] = 'ここには新しいチャットを開始できるページがありません。';
$string['newchatchooser_onthispage'] = 'このページ:';
$string['newchatchooser_title'] = '新しいチャットを開始';
$string['nfilesattached'] = '添付ファイル {$a} 個';
$string['nonauth'] = '未認証';
$string['numfiles'] = 'ファイル {$a} 個';
$string['numimages'] = '画像 {$a} 枚';
$string['numotherfiles'] = 'その他 {$a} 個';
$string['openai_api_chatcompletions'] = 'Chat Completions';
$string['openai_api_responses'] = 'Responses API';
$string['openai_api_type'] = 'APIタイプ';
$string['openai_api_type_desc'] = 'マルチターンチャットに使用するOpenAI APIです。Responses APIは会話の状態をサーバ側で保持するため、ターンごとに新しい入力のみが送信されます (コストが低く、履歴も単純です)。Chat Completionsはリクエストごとにメッセージ配列全体を再構築します (プロバイダとの互換性が広がります)。<br><br>Responses APIをサポートするプロバイダ: <strong>{$a}</strong>。その他のプロバイダは、この設定にかかわらず通知なくChat Completionsにフォールバックします。';
$string['openai_heading'] = 'OpenAI (または互換)';
$string['openlink'] = 'リンクを開く';
$string['placeholder'] = 'メッセージを入力...';
$string['placement_add'] = '配置を追加';
$string['placement_confirmdelete'] = 'この配置を削除してもよろしいですか?';
$string['placement_copyof'] = '{$a} (コピー)';
$string['placement_defaultname'] = 'AIエージェント';
$string['placement_deleted'] = '配置を削除しました。';
$string['placement_duplicated'] = '配置を複製しました。';
$string['placement_edit'] = '配置を編集';
$string['placement_initialskills'] = '初期スキル';
$string['placement_initialskills_help'] = 'チャットの開始時に自動的に読み込まれるスキルです。任意です。エージェントは必要に応じて他のスキルも読み込めます。ここで設定したスキルはこの配置自体も制御します。いずれのスキルにもアクセスできないユーザにはボタンもメニュー項目も表示されず、設定したスキルがすべて削除または無効にされると、この配置は表示されなくなります。';
$string['placement_intro'] = '<p>配置を使用すると、特定の目的に合わせたエージェントを提供できます。それぞれの配置は、URLがマスクのいずれかに一致するページにAIエージェントボタンを追加し、あらかじめ決めた初期スキルとウェルカムテキストでチャットを開始できます。初期スキルが設定されている場合、いずれのスキルにもアクセスできないユーザにはボタンが表示されません。</p><p>初期スキルはチャットの出発点を決めるだけです。エージェントはスキルの関数だけでなく、有効なすべての関数にアクセスできます。</p>';
$string['placement_location'] = 'ボタンの位置';
$string['placement_location_floating'] = 'フローティングボタン';
$string['placement_location_h1'] = 'ページ見出し (H1)';
$string['placement_location_h2'] = 'セカンダリ見出し (H2)';
$string['placement_menuheading'] = 'AIエージェントに質問';
$string['placement_name'] = '名称';
$string['placement_name_help'] = 'ユーザに表示されます: ユーザメニュー、ボタンのツールチップ、および (同じページに複数の配置が一致する場合) ボタンのメニュー内です。';
$string['placement_save'] = '配置を保存';
$string['placement_saved'] = '配置を保存しました。';
$string['placement_skillmissing'] = 'スキルが見つかりません';
$string['placement_urlmask'] = 'URLマスク';
$string['placement_urlmask_help'] = '1行に1つのパターンを入力してください。* をワイルドカードとして使用できます。例: /course/view.php* または /mod/*/view.php*。注意: より限定的な配置が同じ位置を対象としているページでは、/* に一致する広範な配置は非表示になり、ユーザにはより適切なものだけが表示されます。';
$string['placement_urlmask_invalid'] = 'それぞれのURLマスクはスラッシュで始まる必要があります。「{$a}」はそうなっていません。';
$string['placement_welcome'] = 'カスタムウェルカムテキスト (任意)';
$string['placement_welcome_help'] = 'チャットの開始画面の標準のウェルカムメッセージを置き換えます。デフォルトを使用する場合は空にしてください。';
$string['pluginname'] = 'AIエージェント';
$string['previouschats'] = '以前のチャット';
$string['privacy:metadata:aiprovider'] = 'チャットは、応答を生成するため、サイト管理者が選択したAIプロバイダ (OpenAI、Azure OpenAI、Google GeminiまたはAnthropic等) に送信されます。プラグインはMoodleのAIサブシステムを経由せず、それぞれのリクエストをプロバイダに直接送信します。どの企業がデータを受け取り、そこでどれくらいの期間保持されるかは、サイトが設定したプロバイダおよびそのプロバイダ自身の規約によります。';
$string['privacy:metadata:aiprovider:files'] = 'ユーザがチャットに添付したファイル、およびエージェントがユーザに代わってサイトから読み取ったファイルです。モデルが内容を読み取れるようアップロードされます。';
$string['privacy:metadata:aiprovider:messages'] = 'ターンごとに再送信されるチャット履歴です: ユーザのプロンプト、アシスタントの応答、およびエージェントが実行したMoodle関数の結果であり、これらの関数が返した他のユーザの個人データが含まれる場合があります。';
$string['privacy:metadata:aiprovider:userid'] = 'チャットを行っているユーザのIDです。モデルがそのユーザに代わって動作できるよう、モデルへのインストラクションに含まれます。';
$string['privacy:metadata:core_files'] = 'AIエージェントのメッセージに添付されたファイルです。';
$string['privacy:metadata:feedback'] = 'フィードバックが有効で、ユーザが応答を評価するか失敗した関数呼び出しを報告した場合、エージェントの動作を改善するため、評価された一連のやりとりがAIエージェントプラグインの開発者に送信されます。ユーザがフィードバックの送信を選択しない限り何も送信されず、この機能は設定「フィードバックを許可する」で完全にオフにできます。';
$string['privacy:metadata:feedback:freetext'] = 'フィードバックの送信時にユーザが任意で書いたコメントです。入力されたとおりに送信されます。';
$string['privacy:metadata:feedback:snapshot'] = '評価された一連のやりとりの記録です: ユーザの質問、アシスタントの応答、および呼び出された関数の名称です。メールアドレスはマスクされ、これらの関数の引数および結果は、エージェント自身の関数検索を除いて含まれません。ユーザは送信前にテキストを編集できます。';
$string['privacy:metadata:preference:tool_aiagent_closeconfirm_hidden'] = 'チャットを閉じる際の確認ダイアログを今後表示しないという設定です。';
$string['privacy:metadata:preference:tool_aiagent_overlaysize'] = 'ユーザがオーバーレイのチャットパネルに設定したサイズです。';
$string['privacy:metadata:preference:tool_aiagent_sidebarwidth'] = 'ユーザがサイドバーのチャットパネルに設定した幅です。';
$string['privacy:metadata:preference:tool_aiagent_viewtype'] = 'ユーザが最後に使用したチャットのビュータイプ (オーバーレイ、サイドバーまたはフルスクリーン) です。';
$string['privacy:metadata:tool_aiagent_conversation'] = 'ユーザとAIエージェントの間のチャットです。ユーザが削除したチャットは、トークン使用量を引き続き追跡できるよう、除去されずアーカイブされます。';
$string['privacy:metadata:tool_aiagent_conversation:timearchived'] = 'チャットがアーカイブされた (ユーザによって削除された) 日時です (該当する場合)。';
$string['privacy:metadata:tool_aiagent_conversation:timecreated'] = 'チャットが作成された日時です。';
$string['privacy:metadata:tool_aiagent_conversation:timelastactivity'] = 'チャットに最後のメッセージが保存された日時です。';
$string['privacy:metadata:tool_aiagent_conversation:timemodified'] = 'チャットが最後に更新された日時です。';
$string['privacy:metadata:tool_aiagent_conversation:title'] = '最初のメッセージから生成されたチャットの名称です。';
$string['privacy:metadata:tool_aiagent_conversation:userid'] = 'チャットを所有するユーザです。';
$string['privacy:metadata:tool_aiagent_message'] = 'ユーザのプロンプトおよびAIの応答を含む、チャット内の個々のメッセージです。';
$string['privacy:metadata:tool_aiagent_message:content'] = 'メッセージのコンテンツです。';
$string['privacy:metadata:tool_aiagent_message:role'] = 'メッセージを送信した主体です: ユーザ、アシスタント、システムまたは関数です。';
$string['privacy:metadata:tool_aiagent_message:timecreated'] = 'メッセージが作成された日時です。';
$string['privacy:metadata:tool_aiagent_usage'] = '使用量の追跡のために保持される、それぞれのAIリクエストで記録されたトークン使用量です。';
$string['privacy:metadata:tool_aiagent_usage:completiontokens'] = '使用された出力 (コンプリーション) トークンの数です。';
$string['privacy:metadata:tool_aiagent_usage:model'] = 'リクエストを処理したAIモデルです。';
$string['privacy:metadata:tool_aiagent_usage:prompttokens'] = '使用された入力 (プロンプト) トークンの数です。';
$string['privacy:metadata:tool_aiagent_usage:provider'] = 'リクエストを処理したAIプロバイダです。';
$string['privacy:metadata:tool_aiagent_usage:timecreated'] = 'リクエストが行われた日時です。';
$string['relevancescore'] = '関連度スコア';
$string['relevancescore_help'] = '関連度スコアは、ウェブサービス関数がAIエージェントにどれくらい適しているかを1から10の尺度で示します。

**高いスコア (7-10)** は、コースの作成、ユーザの登録、コンテンツの検索、評点の取得等、AIアシスタントにとって明らかに有用な関数に与えられます。

**中程度のスコア (4-6)** は、有用ではあるものの高いリスクを伴う破壊的または取り消しできない操作 (コースの削除やユーザの登録解除等)、および適用範囲が限られたニッチな関数に典型的です。

**低いスコア (1-3)** は、ブラウザとサーバ間の内部通信のために設計された関数、認証を必要としない関数、非推奨の関数、またはより良い代替と重複する関数に与えられます。

**スコア0** は、その関数がまだ評価されていないことを意味します。これはサードパーティプラグインの関数によく見られます。

関連度スコアは、それぞれの関数を有効にするかどうかの初期デフォルトを設定するために使用されました。Moodleコアコンポーネントの初期スコアはAIによって生成されたものであり、手動での確認が必要な場合があります。';
$string['removefilenamed'] = 'ファイルを削除: {$a}';
$string['renamechat'] = 'チャットをリネーム';
$string['renamechat_label'] = 'チャットの新しい名称';
$string['responses_endpoints'] = 'カスタムResponses APIエンドポイント';
$string['responses_endpoints_desc'] = 'ホスティングまたはプロキシされたOpenAIあるいはAzure OpenAIのデプロイメントが標準以外のアドレスでResponses APIを提供している場合に、そのエンドポイントを上書きします。組み込みのデフォルトを使用する場合は空にしてください。APIタイプがChat Completionsの場合は効果がありません。<br><br>
例えば https://your-resource.azure.com/api/responses?api-version=preview のようになります。Files APIのエンドポイントは、/responses を /files に置き換えてクエリ文字列を維持することで導出されるため、アップロードは https://your-resource.azure.com/api/files?api-version=preview に送られます。<br><br>
複数のプロバイダインスタンスを使用する場合は、1行に1つのURLを追加してください。それぞれのプロバイダは、自身のAPIエンドポイントとホストが一致する行を使用します。';
$string['responses_endpoints_invalidline'] = 'それぞれの行は、パスが /responses で終わる完全なhttps URLである必要があります。httpはlocalhostの場合のみ受け付けられます。無効な行: {$a}';
$string['resume_desc'] = '最近のチャットがあります。続きから始めるか、新しいチャットを開始してください。';
$string['resume_lastmessage'] = '最終メッセージ: {$a}前';
$string['resume_resume'] = '最後のチャットを再開';
$string['resume_title'] = 'おかえりなさい';
$string['sendmessage'] = '送信';
$string['settings'] = 'AIエージェント設定';
$string['showallfiles'] = 'すべて表示';
$string['skill_add'] = 'スキルを追加';
$string['skill_edit'] = 'スキルを編集';
$string['skill_save_close'] = '保存して閉じる';
$string['skill_save_preview'] = '保存してプレビュー';
$string['skill_saved'] = 'スキルを保存しました。';
$string['skilladd_aitip'] = 'この内容を手作業で入力する代わりに、AIエージェントにスキルの作成を依頼できます。適切な関数を見つけ、インストラクションの草案を作成します。<a href="{$a}">AIエージェントを開く</a>。';
$string['skillcapabilities_help'] = 'スキルのメイン関数から算出されます。ユーザは、サイト内のいずれかのコンテキストでこれらのケイパビリティを1つ以上持っている場合のみ、このスキルを使用できます。この一覧は、すべてのメイン関数に必要なケイパビリティをまとめたものです。';
$string['skillcapabilities_none'] = 'なし。このスキルはすべてのユーザが利用できます。';
$string['skillconfigured'] = '設定済み';
$string['skilldeleted'] = 'スキル「{$a}」を削除しました。';
$string['skilldescription'] = '説明';
$string['skilldescription_help'] = 'アシスタントがいつスキルを読み込むべきか判断できるよう、そのスキルが何のためのものかを記述します。実行する手順ではなく、対象となるタスクまたはアクティビティを説明してください。この内容はスキル一覧 (人が読みます) とシステムプロンプト (アシスタントが読みます) の両方に表示されます。';
$string['skillexists'] = '省略名「{$a}」のスキルはすでに存在します。';
$string['skillimport_badmasks'] = '「mainfunctions」および「otherfunctions」フィールドは、それぞれマスク文字列の一覧である必要があります。';
$string['skillimport_badshortname'] = 'それぞれのスキルには有効な省略名 (英字、数字、ハイフン、アンダースコア) が必要です。';
$string['skillimport_invalidjson'] = 'アップロードされたファイルは有効なスキルJSONではありません。';
$string['skillimport_missingfield'] = '必須フィールドがありません: {$a}。';
$string['skillimported'] = 'スキル「{$a}」をインポートしました。';
$string['skillinstructions'] = 'インストラクション';
$string['skillinstructions_help'] = 'スキルが読み込まれるときにチャットへ読み込まれるガイダンスです。自明でない内容のみを含めてください。アシスタントは読み込まれたすべての関数とその説明をすでに見ているため、関数の動作を繰り返したり、当然のパラメータを渡すよう念を押したりしないでください。説明ではカバーされないワークフローの順序、判断およびつまずきやすい点を記述し、場合によってのみ適用される手順は「もし...」の形で書いてください。';
$string['skillloadedevent'] = 'スキル読み込み · {$a}';
$string['skillmainfunctions'] = 'メイン関数';
$string['skillmainfunctions_help'] = 'スキルの中心となる作成および更新の関数を選択する、限定的なマスクのセットです。これらの関数のケイパビリティによって、誰にスキルが提供されるかが決まります。少なくとも1つの関数にアクセスできるユーザのみです。それぞれのマスクは関数名またはコンポーネント/名称のグロブに一致します (「*」はワイルドカード、先頭の「~」は一致を除外します)。すべてのユーザにスキルを提供する場合は空にしてください。';
$string['skillmatched'] = '一致 ({$a})';
$string['skillmisconfigured'] = '現在、誰も利用できません: メイン関数のいずれも有効な関数に解決されません。';
$string['skillname'] = '名称';
$string['skillname_help'] = 'スキル一覧に表示される、短くて読みやすい表示名です。';
$string['skillnomatch'] = 'これらのパターンに一致する有効な関数はありません。';
$string['skillnotfound'] = 'スキルが見つかりません: {$a}。';
$string['skillotherfunctions'] = 'その他の関数';
$string['skillotherfunctions_help'] = 'スキルが持ち込むその他の関数 (読み取り、ヘルパー、またはコンポーネント全体) のマスクです。書式はメイン関数と同じですが、誰にスキルが提供されるかには影響しません。追加の関数が不要な場合は空にしてください。';
$string['skills_intro'] = '<p>スキルは、特定の目的のための専門的なインストラクションと、そのために推奨される関数の一覧をまとめたものです。AIエージェントが混乱しやすい、または適切な関数を見つけられない複数ステップのよくあるタスクや、あなたの組織に固有のタスクにスキルをご利用ください。</p><p>スキルの一覧とその説明は常にAIエージェントが利用でき、ユーザのリクエストに合うと判断したスキルをAIエージェント自身が読み込みます。スキルは、そのメイン関数の少なくとも1つにアクセスできるユーザのみが利用できます。例えば、教師向けに作られたスキルは学生には表示されません。</p>';
$string['skillshortname'] = '省略名';
$string['skillshortname_help'] = 'サイト全体で一意の、変わらないマシン名です。英字、数字、ハイフンおよびアンダースコアのみ使用できます。スキルの作成後は変更できません。';
$string['skilltoobroad'] = '関数 {$a} 個に一致します。範囲が広すぎる可能性があります。関数マスクを絞り込むことをご検討ください。';
$string['skillunavailable'] = '利用不可';
$string['skillupdated'] = 'スキル「{$a}」を更新しました。';
$string['switchview'] = 'ビューを切り替え';
$string['systeminstruction'] = 'カスタムシステムインストラクション';
$string['systeminstruction_desc'] = 'すべてのリクエストとともにAIモデルに送信されるカスタムインストラクションです。モデルの動作、口調および能力を定めます。組み込みのデフォルト (下に表示) を使用する場合は空にしてください。プレースホルダとして {siteurl} (サイトURL)、{userid} (現在のユーザのID) および {date} (今日の日付、ISO形式) を使用できます。これらは実行時に置き換えられます。デフォルトのインストラクション:{$a->default}

システムインストラクション (デフォルトまたはカスタム) に常に追加されます:{$a->context}';
$string['tab_functions'] = '関数';
$string['tab_placements'] = '配置';
$string['tab_skills'] = 'スキル';
$string['tagarea_tool_aiagent_functions'] = 'AIエージェント関数タグ';
$string['task_cleanup_chats'] = '古いAIエージェントチャットを削除する';
$string['task_purge_provider_data'] = 'AIプロバイダからAIエージェントのチャットデータを削除する';
$string['task_revalidate_license'] = 'AIエージェントライセンスを再検証する';
$string['thinking'] = 'AIエージェントが考えています...';
$string['timecreated'] = '作成日時';
$string['timelastactivity'] = '最終アクティビティ';
$string['timemodified'] = '更新日時';
$string['tryagain'] = '再試行';
$string['usage_completiontokens'] = '出力トークン';
$string['usage_model'] = 'モデル';
$string['usage_prompttokens'] = '入力トークン';
$string['usage_provider'] = 'プロバイダ';
$string['usage_totaltokens'] = '合計トークン';
$string['viewdetails'] = '詳細を表示';
$string['viewtype_fullscreen'] = 'フルスクリーン';
$string['viewtype_overlay'] = 'オーバーレイ';
$string['viewtype_sidebar'] = 'サイドバー';
$string['viewtypes'] = '利用可能なビュータイプ';
$string['viewtypes_alldisabled_warning'] = '<a href="{$a}">設定</a>ですべてのビュータイプが無効にされているため、AIエージェントは誰も利用できません。';
$string['viewtypes_desc'] = 'ユーザが開けるチャットビューです: ページの隅に表示される小さなオーバーレイ、ページコンテンツの横のサイドバー、およびフルスクリーンのチャットページです。AIエージェントをすべてのユーザに対して一時的に無効にするには、すべてのチェックを外してください。';
$string['viewtypes_unavailable'] = 'AIエージェントは現在利用できません。';
$string['welcomedesc'] = 'あなたのサイト、コース、ユーザまたはコンテンツについてAIエージェントに質問してください。読み取りができ、あなたの承認があれば変更もできます。';
$string['welcometitle'] = 'ようこそ、{$a}さん';
