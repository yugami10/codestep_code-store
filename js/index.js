/** イベントの詳細 */

/**
 * ハンバーガーメニューをクリック時のモーダル切替
 */
const switchHambergerMenuModal = () => {
    const header = document.querySelector('header')
    if (header.classList.contains('hambarger-open')) {
        header.classList.remove('hambarger-open')
    } else {
        header.classList.add('hambarger-open')
    }
}

/**
 * ハンバーガーアイコンを押下
 * @param {*} e
 */
const clickHambarger = (e) => {
    switchHambergerMenuModal()
}

/** イベント一覧 */

/**
 * 初回ロード時に実行
 * @param {*} e
 */
const domContentLoaded = (e) => {
    const hambarger = document.querySelector('.hambarger-icon')
    hambarger.addEventListener('click', clickHambarger)
}

document.addEventListener('DOMContentLoaded', domContentLoaded)